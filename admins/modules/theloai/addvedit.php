<?php
$id = Utils::getIndex("id");
$row = $theloai->getById($id);

?><div class="col-md-3"><?php
if (Count($row) == 0) {//khong co -> them moi{
	$info ="Thêm thể loại mới";
	$row["name_chuyen_de"] = "";
  include ROOT."/admins/modules/theloai/addtheloai.php";
}
else {
  $info ="Cập nhật thể loại";
  include ROOT."/admins/modules/theloai/edittheloai.php";
}
?></div><?php
