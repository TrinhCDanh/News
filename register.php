<?php

$name_user = Utils::postIndex("name_user");
$email_user = Utils::postIndex("email_user");
$pass1_user = Utils::postIndex("pass1_user");
$pass2_user = Utils::postIndex("pass2_user");
$err = "";

if(isset($_POST["submit"])) {
  $user = new User();
  if($user->isUserNameExist($name_user, $email_user))
    $err .= "Tài khoản đã tồn tại";
  else if ($user->checkRegister($name_user, $pass1_user, $pass2_user) != "")
    $err .= $user->checkRegister($name_user, $pass1_user, $pass2_user);
  else {
    $n = $user->saveAddNew();
    ?>
      <script language="javascript">
        swal('Thành công!','Click OK để chuyển sang trang đăng nhập!','success');
        $('.swal2-confirm').click(function(){
          window.location="user";
        });
      </script>
    <?php
  } 
}
 
?>

<div class="content-block">
  <div class="col-xs-12 col-lg-6">
    <div class="content-block-header">
      <p>Đăng ký</p>
    </div>

    <?php 
      if($err != "") {
        ?>
          <div class="alert alert-danger">      
            <?php echo $err; ?>
          </div>
        <?php
      }
    ?>
    
    <form class="content-form" method="post" action="index.php?mod=register">

      <div class="group">      
        <input class="form-control" type="text" name="name_user" required autofocus value="<?php echo $name_user; ?>">
        <span class="bar"></span>
        <label class="form-control-placeholder">Name</label>
      </div>
        
      <div class="group">      
        <input class="form-control" type="email" name="email_user" required value="<?php echo $email_user; ?>">
        <span class="bar"></span>
        <label class="form-control-placeholder">Email</label>
      </div>

      <div class="group">      
        <input class="form-control" type="password" name="pass1_user" required>
        <span class="bar"></span>
        <label class="form-control-placeholder">Password</label>
      </div>

      <div class="group">      
        <input class="form-control" type="password" name="pass2_user" required>
        <span class="bar"></span>
        <label class="form-control-placeholder">Confirm Password</label>
      </div>

      <div class="group text-right">
          <button type="reset" class="btn-submit">Clear</button>
          <button type="submit" class="btn-submit" name="submit">Save</button>  
      </div>

    </form>
  </div>
</div>


  
