<?php  



if ($mod == "theloai")
	include "modules/theloai/index.php";
else if ($mod == "loaitin")
	include "modules/loaitin/index.php";
else if ($mod == "account")
	include "modules/account/index.php";
else if ($mod == "baiviet")
	include "modules/baiviet/index.php";
else
	include "modules/dashboard/index.php";
/*else if ($mod=="baiviet")
	include "modules/baiviet/index.php";
else if ($mod=="user")
	include "modules/user/index.php";
else if ($mod=="ttadmin")
	include "modules/ttadmin/index.php";
else
	include "modules/dashboard/index.php";
$mod = getIndex("mod","dashboard");*/
?>