<?php
$id = Utils::getIndex("id");
$row = $loaitin->getById($id);

?><div class="col-md-3"><?php
	if (Count($row)==0) {
		$info ="Thêm loại tin mới";
		$row["name_chuyen_de"]="";
	  include ROOT."/admins/modules/loaitin/addloaitin.php";
	}
	else {
	  $info =" Cập nhật loại tin";
	  include ROOT."/admins/modules/loaitin/editloaitin.php";
	}
?></div><?php