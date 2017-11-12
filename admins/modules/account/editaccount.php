<?php $row = $admin->getById($_SESSION["admin_data"]["id_admin"]);?>
<form id="validationForm" action="index.php?mod=account&ac=saveEdit&id=<?php echo $_SESSION["admin_data"]["id_admin"]; ?>" method="post">
  <div class="pmd-card pmd-z-depth">
      
      <div class="pmd-card-body">

        <h2><?php echo $info; ?></h2>
        <div class="group-fields clearfix row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-group pmd-textfield pmd-textfield-floating-label">
              <label for="regular1" class="control-label">
                Tên đăng nhập*
              </label>
              <input type="text" id="regular1" class="form-control" name="name_admin" required value="<?php echo $row["name_admin"]; ?>">
            </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-group pmd-textfield pmd-textfield-floating-label">
              <label for="regular1" class="control-label">
                Email*
              </label>
              <input type="text" id="regular1" class="form-control" name="email_admin" value="<?php echo $row["email_admin"]; ?>" >
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="form-group pmd-textfield pmd-textfield-floating-label">
              <label for="regular1" class="control-label">
                Số điện thoại
              </label>
              <input type="number" id="regular1" class="form-control" name="sdt_admin" value="<?php echo $row["sdt_admin"]; ?>" >
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="form-group pmd-textfield pmd-textfield-floating-label">
              <label for="regular1" class="control-label">
                Ngày sinh
              </label>
              <input type="text" id="datepicker" class="form-control" name="ngaysinh_admin" value="<?php echo $row["ngaysinh_admin"]; ?>" >
            </div>
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="radio">
              <label class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input type="radio" name="gioitinh_admin" id="inlineRadio1" value="1" <?php if($row["gioitinh_admin"] == 1) echo "checked"; ?>>
                <span for="inlineRadio1">Nam</span> </label>
              <label class="radio-inline pmd-radio pmd-radio-ripple-effect">
                <input type="radio" name="gioitinh_admin" id="inlineRadio2" value="0" <?php if($row["gioitinh_admin"] == 0) echo "checked"; ?>>
                <span for="inlineRadio2">Nữ</span> </label>
            </div>
          </div>

          
        </div>

        <div class="group-fields clearfix row">
          <div class="col-sm-12">
            <div class="checkbox">
              <label class="pmd-checkbox pmd-checkbox-ripple-effect">
                <input value="" type="checkbox" id="changePass">
                Đổi mật khẩu
              </label>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-group pmd-textfield pmd-textfield-floating-label">
              <label for="regular1" class="control-label">
                Mật khẩu*
              </label>
              <input type="password" id="regular1" class="form-control frm-password" name="pass1_admin" disabled required>
            </div>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="form-group pmd-textfield pmd-textfield-floating-label">
              <label for="regular1" class="control-label">
                Nhập lại mật khẩu*
              </label>
              <input type="password" id="regular1" class="form-control frm-password" name="pass2_admin" disabled required>
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
