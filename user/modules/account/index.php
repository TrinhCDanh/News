<?php  
  $user = new User();
  $baiviet = new Post();

  $row = $user->getById($_SESSION["user_data"]["id_user"]);
  $info = "";
  $ac = Utils::getIndex("ac");/*, "Showtheloai");*/ //ac is action

  $name_user = Utils::postIndex("name_user");
  $email_user = Utils::postIndex("email_user");
  $pass1_user = Utils::postIndex("pass1_user");
  $pass2_user = Utils::postIndex("pass2_user");
  $ngaysinh_user = postIndex("ngaysinh_user", "");
  $gioitinh_user = Utils::postIndex("gioitinh_user");
  $sdt_user = Utils::postIndex("sdt_user");

  $arrngay = explode('/', $ngaysinh_user);
  $err = "";

  if ($ac == "delete") {
    $n = $user->delete(Utils::getIndex("id"));
    if ($n == 1) {
      unset($_SESSION["user_login"]);
      unset($_SESSION["user_data"]);
      ?>
        <script language="javascript">
          swal('Thành công','Click Ok để tiếp tục!','success');
          $('.swal2-confirm').click(function(){
            window.location="../index.php";
          });
        </script>
      <?php
    }
    else {
      ?>
        <script language="javascript">
          swal('Thất bại...','Click Ok để tiếp tục!','error');
          $('.swal2-confirm').click(function(){
            window.location="index.php?mod=account";
          });
        </script>
      <?php
    }
  }
  else if(isset($_POST["submit"])) {
    if ($name_user != $row["name_user"]) {
      if($user->isUserNameExist($name_user, ""))
          $err .= "Tên tài khoản đã tồn tại";
    }
    if ($email_user != $row["email_user"]) {
      if($user->isUserNameExist("",$email_user))
          $err .= " Email tài khoản đã tồn tại";
    } 
    if ($user->checkRegister($name_user, $pass1_user, $pass2_user) != "")
      $err .= $user->checkRegister($name_user, $pass1_user, $pass2_user);
    if (strlen($sdt_user) < 10)
      $err .= "Số điện thoại phải từ 10 số trở lên";
    if (date("Y") - $arrngay[2] < 18)
      $err .= "Bạn phải 18 tuổi trở lên";
    if ($ac == "saveEdit" && $err == "") {
      $n = $user->saveEdit(Utils::getIndex("id"));
      $baiviet->updateAuthor($row["name_user"]);
      ?>
        <script language="javascript">
          swal('Thành công!','Click OK để tiếp tục!','success');
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
    </ol><!--br-->
    
    <?php  
      if($err != "") {
        ?>
        <div class="col-lg-12">
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
        <?php include "modules/account/editaccount.php"; ?>
      </div>

      <div class="col-md-3">
        <div class="pmd-card pmd-z-depth">
          <div class="pmd-card-actions text-center">
            
            <button data-target="#complete-dialog" data-toggle="modal" class="btn pmd-ripple-effect btn-primary pmd-z-depth" type="button" style="margin-left: 0">Xóa tài khoản</button>
        
            <div tabindex="-1" class="modal fade" id="complete-dialog" style="display: none;" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h2 class="pmd-card-title-text">Are you sure?</h2>
                  </div>
                  <div class="modal-body">
                    <p>Bạn có chắc chắn muốn xóa tài khoản này không? Sau khi xóa tài khoản này bạn sẽ không truy cập được vào trang này nữa!</p>
                  </div>
                  <div class="pmd-modal-action pmd-modal-bordered text-right">
                    <a href="index.php?mod=account&ac=delete&id=<?php echo $row["id_user"]; ?>" class="btn pmd-btn-flat pmd-ripple-effect btn-primary">Yes</a>
                    <a data-dismiss="modal" type="button" class="btn pmd-btn-flat pmd-ripple-effect btn-default">No</a>
                  </div>
                </div>
              </div>
            </div>
               
            
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







