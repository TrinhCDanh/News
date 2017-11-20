<?php
$id_binhluan = Utils::getIndex("id_binhluan");
$row_edit = $binhluan->getById($id_binhluan);

if (Count($row_edit)==0) {
  ?>
		<form method="post" action="index.php?mod=baiviet&id_baiviet=<?php echo $data_baiviet["id_baiviet"]; ?>&ac=addBinhluan">
      <div class="pmd-card-body">
        <div class="group-fields clearfix row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group pmd-textfield pmd-textfield-floating-label">
              <label class="control-label">Bạn nghĩ gì về điều này?</label>
              <textarea required class="form-control" name="noidung_binhluan"></textarea>
            </div>
            <div class="form-group pmd-textfield text-right">
              <?php  
                if (!isset($_SESSION["user_login"])) {
                  ?><a href="user/index.php" class="btn pmd-ripple-effect btn-primary" type="submit" name="submit">Gửi bình luận</a><?php
                }
                else {
                  ?><button class="btn pmd-ripple-effect btn-primary" type="submit" name="submit">Gửi bình luận</button><?php
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </form>
  <?php
}
else {
  ?>
		<form method="post" action="index.php?mod=baiviet&id_baiviet=<?php echo $data_baiviet["id_baiviet"]; ?>&ac=editBinhluan">
      <div class="pmd-card-body">
        <div class="group-fields clearfix row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-group pmd-textfield">
              <label class="control-label">Bạn nghĩ gì về điều này?</label>
              <textarea required class="form-control" name="noidung_binhluan"><?php echo $row_edit["noidung_binhluan"]; ?></textarea>
            </div>
            <div class="form-group pmd-textfield text-right">
              <?php  
                if (!isset($_SESSION["user_login"])) {
                  ?><a href="user/index.php" class="btn pmd-ripple-effect btn-primary" type="submit" name="submit">Sửa</a><?php
                }
                else {
                  ?><button class="btn pmd-ripple-effect btn-primary" type="submit" name="submit">Gửi bình luận</button><?php
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </form>
  <?php
}
?>