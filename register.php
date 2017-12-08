<?php

$name_user = Utils::postIndex("name_user");
$email_user = Utils::postIndex("email_user");
$ngaysinh_user = postIndex("ngaysinh_user", "");
$gioitinh_user = Utils::postIndex("gioitinh_user");
$sdt_user = Utils::postIndex("sdt_user");
$pass1_user = Utils::postIndex("pass1_user");
$pass2_user = Utils::postIndex("pass2_user");

$arrngay = explode('/', $ngaysinh_user);
$err = "";

if(isset($_POST["submit"])) {
  $user = new User();
  if($user->isUserNameExist($name_user, $email_user))
    $err .= "Tên hoặc Email đã tồn tại đã tồn tại";
  else if ($user->checkRegister($name_user, $pass1_user, $pass2_user) != "")
    $err .= $user->checkRegister($name_user, $pass1_user, $pass2_user);
  else if (strlen($sdt_user) < 10)
    $err .= "Số điện thoại phải từ 10 số trở lên";
  else if (date("Y") - $arrngay[2] < 18)
    $err .= "Bạn phải 18 tuổi trở lên";
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
<div class="jumbotron text-center" style="background-color: #1a2940">
  <div class="header-page">
    <span class="clip-text">ĐĂNG KÝ</span>
    <p>Đăng ký để trở thành thành viên của VNNEWS</p>
  </div>
</div>
<div class="main-content" style="display: flex; justify-content: center;">
  <div class="col-xs-12 col-lg-6">

    <?php 
      if($err != "") {
        ?>
          <div class="alert alert-danger">      
            <?php echo $err; ?>
          </div>
        <?php
      }
    ?>
    
    <form id="validationForm" action="index.php?mod=register" method="post">
  <div class="pmd-card pmd-z-depth">
      
      <div class="pmd-card-body">
        <div class="group-fields clearfix row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-group pmd-textfield pmd-textfield-floating-label">
              <label for="regular1" class="control-label">
                Tên đăng nhập*
              </label>
              <input type="text" id="regular1" class="form-control" name="name_user" required autofocus value="<?php echo $name_user; ?>">
            </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-group pmd-textfield pmd-textfield-floating-label">
              <label for="regular1" class="control-label">
                Email*
              </label>
              <input type="email" id="regular1" class="form-control" name="email_user" value="<?php echo $email_user; ?>">
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="form-group pmd-textfield pmd-textfield-floating-label">
              <label for="regular1" class="control-label">
                Số điện thoại
              </label>
              <input type="number" id="regular1" class="form-control" name="sdt_user" value="<?php echo $sdt_user; ?>">
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="form-group pmd-textfield pmd-textfield-floating-label">
              <label for="regular1" class="control-label">
                Ngày sinh
              </label>
              <input type="text" id="datepicker" class="form-control" name="ngaysinh_user" value="<?php echo $ngaysinh_user; ?>">
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="radio">
              <label class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input type="radio" name="gioitinh_user" id="inlineRadio1" value="1" <?php if($gioitinh_user == 1) echo "checked";?> >
                <span for="inlineRadio1">Nam</span> </label>
              <label class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input type="radio" name="gioitinh_user" id="inlineRadio2" value="0" <?php if($gioitinh_user == 0) echo "checked";?> >
                <span for="inlineRadio2">Nữ</span> </label>
            </div>
          </div>

          
        </div>

        <div class="group-fields clearfix row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-group pmd-textfield pmd-textfield-floating-label">
              <label for="regular1" class="control-label">
                Mật khẩu*
              </label>
              <input type="password" id="regular1" class="form-control" name="pass1_user" required>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-group pmd-textfield pmd-textfield-floating-label">
              <label for="regular1" class="control-label">
                Nhập lại mật khẩu*
              </label>
              <input type="password" id="regular1" class="form-control" name="pass2_user" required>
            </div>
          </div>

        </div>

      </div>
      
      <div class="pmd-card-actions">
        <button class="btn btn-primary pmd-ripple-effect" type="submit" name="submit">Submit</button>
        <button class="btn btn-default pmd-ripple-effect" type="reset">Cancel</button>
      </div>
  </div>

</form>
</div>
</div>

<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
</script>
  
