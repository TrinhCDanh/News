<?php  
  $admin = new Admin();
  $baiviet = new Post();

  $info = "";
  $ac = Utils::getIndex("ac");
  $row = $admin->getById($_SESSION["admin_data"]["id_admin"]);


  if ($ac == "delete") {
    //Sau xu ly
    $admin->delete(Utils::getIndex("id"));
    unset($_SESSION["admin_login"]);
    unset($_SESSION["admin_data"]);
    ?>
      <script language="javascript">
        window.location="login.html";
      </script>
    <?php
    exit;
  }
  if ($ac == "saveAdd") {
    $admin->saveAddNew();
    ?>
      <script language="javascript">
        swal('Thành công!','Click Ok để tiếp tục!','success');
        $('.swal2-confirm').click(function(){
          window.location="index.php?mod=account";
        });
      </script>
    <?php
  }
  if ($ac == "saveEdit") {
    $admin->saveEdit(Utils::getIndex("id"));
    $baiviet->updateAuthor($row["name_admin"]);
    ?>
      <script language="javascript">
        swal('Thành công!','Click Ok để tiếp tục!','success');
        $('.swal2-confirm').click(function(){
          window.location="index.php?mod=account";
        });
      </script>
    <?php
  }
?>
<div id="content" class="pmd-content inner-page">

<!--tab start-->
<div class="container-fluid full-width-container data-tables">
    <!-- Title -->
    <h1 class="section-title" id="services">
      <span>Quản lý tài khoản</span>
    </h1><!-- End Title -->
  
    <!--breadcrum start-->
    <ol class="breadcrumb text-left">
      <li><a href="index.php?mod=dashboard">Dashboard</a></li>
      <li class="active">Tài khoản</li>
    </ol><!--breadcrum end-->
    
    <section class="row component-section dashboard">
      
      <!-- table card title and description -->
      <div class="col-md-9">
        
      <?php  
        if ($ac != "addNew") {
          $info = "Cập nhật tài khoản";
          include "modules/account/editaccount.php";
        }
        else {
          $info = "Tạo tài khoản mới";
          include "modules/account/addaccount.php";
        }
      ?>
    </div>
    <div class="col-md-3">
      <div class="pmd-card pmd-z-depth">
        <div class="pmd-card-actions text-center">
          <?php 
            if($row["level_admin"] == 1) {
              ?><a href="index.php?mod=account&ac=addNew" class="btn btn-primary pmd-ripple-effect">Thêm tài khoản</a><?php
            }
            else {
              ?>
                <button data-target="#complete-dialog" data-toggle="modal" class="btn pmd-ripple-effect btn-primary pmd-z-depth" type="button" style="margin-left: 0">Xóa tài khoản</button>
            
                <div tabindex="-1" class="modal fade" id="complete-dialog" style="display: none;" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h2 class="pmd-card-title-text">Are you sure?</h2>
                      </div>
                      <div class="modal-body">
                        <p>Bạn có chăc chăn muốn xóa tài khoản này không? Sau khi xóa tài khoản này bạn sẽ không truy cập được vào trang này nữa!</p>
                      </div>
                      <div class="pmd-modal-action pmd-modal-bordered text-right">
                        <a href="index.php?mod=account&ac=delete&id=<?php echo $row["id_admin"]; ?>" class="btn pmd-btn-flat pmd-ripple-effect btn-primary">Yes</a>
                        <a data-dismiss="modal" type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-default">No</a>
                      </div>
                    </div>
                  </div>
                </div>
              <?php
            } 
          ?>
          
        </div>
      </div>
    </div>
         <!-- table card code and example end -->
    </section>

</div>
</div>

<script type="text/javascript">
  $("#changePass").change(function(){
  if($(this).is(":checked"))
    $(".frm-password").removeAttr('disabled');
  else
    $(".frm-password").attr("disabled", "");
});
</script>
<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
</script>

