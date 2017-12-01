<?php
$id_binhluan = Utils::getIndex("id_binhluan");
$row_edit = $binhluan->getById($id_binhluan);
?>

<form method="post" action="index.php?mod=baiviet&id_baiviet=<?php echo $data_baiviet["id_baiviet"]; ?>&ac=addBinhluan">
  <div class="pmd-card-body">
    <div class="group-fields clearfix row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="form-group pmd-textfield pmd-textfield-floating-label">
          <label for="regular1" class="control-label">
            Tên hiển thị*
          </label>
          <input type="text" id="regular1" class="form-control" name="name_binhluan" required>
        </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <div class="form-group pmd-textfield pmd-textfield-floating-label">
          <label for="regular1" class="control-label">
            Email của bạn*
          </label>
          <input type="text" id="regular1" class="form-control" name="email_binhluan" required>
        </div>
      </div>

      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form-group pmd-textfield pmd-textfield-floating-label">
          <label class="control-label">Bạn nghĩ gì về điều này?</label>
          <textarea required class="form-control" name="noidung_binhluan"></textarea>
        </div>
        <div class="form-group pmd-textfield text-right">
          <button class="btn pmd-ripple-effect btn-primary" type="submit" name="submit">Gửi bình luận</button>
        </div>
      </div>
    </div>
  </div>
</form>

		