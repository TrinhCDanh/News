<?php  
  $admin = new Admin();
  $baiviet = new Post();

  $info = "";
  $ac = Utils::getIndex("ac");/*, "Showtheloai");*/ //ac is action

  if ($ac == "delete") {
    //Sau xu ly
    $n = $admin->delete(Utils::getIndex("id"));
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
    
    <section class="row component-section">
      
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

