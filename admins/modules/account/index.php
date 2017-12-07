<?php  
  $admin = new Admin();
  $baiviet = new Post();

  $info = "";
  $ac = Utils::getIndex("ac");
  $row = $admin->getById($_SESSION["admin_data"]["id_admin"]);

  $name_admin = Utils::postIndex("name_admin");
  $email_admin = Utils::postIndex("email_admin");
  $sdt_admin = Utils::postIndex("sdt_admin");
  $ngaysinh_admin = postIndex("ngaysinh_admin", "");
  $gioitinh_admin = Utils::postIndex("gioitinh_admin");
  $pass1_admin = Utils::postIndex("pass1_admin");
  $pass2_admin = Utils::postIndex("pass2_admin");
  $err = $err2 = "";



  /*if ($ac == "delete") {
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
  if (isset($_POST["submit"]) && $ac == "saveAdd") {
    if($admin->isadminNameExist($name_admin, $email_admin))
      $err2 .= "Tài khoản mới tạo đã tồn tại";
    else if ($admin->checkRegister($name_admin, $pass1_admin, $pass2_admin) != "")
      $err2 .= $admin->checkRegister($name_admin, $pass1_admin, $pass2_admin);
    else {
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
  }*/
  if(isset($_POST["submit"]) && $ac == "saveEdit") {
    if ($name_admin != $row["name_admin"]) {
      if($admin->isadminNameExist($name_admin, ""))
          $err .= "Tên tài khoản đã tồn tại";
    }
    if ($email_admin != $row["email_admin"]) {
      if($admin->isadminNameExist("",$email_admin))
          $err .= " Email tài khoản đã tồn tại";
    } 
    if ($admin->checkRegister($name_admin, $pass1_admin, $pass2_admin) != "")
      $err .= $admin->checkRegister($name_admin, $pass1_admin, $pass2_admin);
    if ($err == "") {
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

    <?php  
      if($err != "") {
        ?>
        <div class="col-lg-9">
          <div class="alert alert-danger">      
            <?php echo $err; ?>
          </div>
        </div>
          
        <?php
      }
    ?>
    
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

    <!--<?php  
      if($err2 != "") {
        ?>
        <div class="col-lg-9">
          <div class="alert alert-danger">      
            <?php echo $err2; ?>
          </div>
        </div>
          
        <?php
      }
    ?>

    <div class="col-md-9">
      <?php
        if($row["level_admin"] == 1) {
          $info = "Tạo tài khoản admin mới";
          include "modules/account/addaccount.php";
        } 
      ?>
    </div>
    
    <?php 
      if($row["level_admin"] == 1) {
        ?>
          <div class="col-md-3">
            <div class="pmd-card pmd-z-depth">
              <div class="pmd-card-actions text-center">
                <a href="index.php?mod=account&ac=addNew" class="btn btn-primary pmd-ripple-effect">Thêm tài khoản</a>
              </div>
            </div>
          </div>
        <?php
      }
    ?>-->
          
      
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
    $( "#datepicker2" ).datepicker();
  } );
</script>

