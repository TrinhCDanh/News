<?php  


if ($mod == "account")
	include "modules/account/index.php";
else if ($mod == "baiviet")
	include "modules/baiviet/index.php";
else if ($mod == "baigui")
	include "modules/baigui/index.php";
else if ($mod == "baidadang")
	include "modules/baidadang/index.php";
else if ($mod == "baidahuy")
	include "modules/baidahuy/index.php";
/*else if ($mod=="user")
	include "modules/user/index.php";
else if ($mod=="ttadmin")
	include "modules/ttadmin/index.php";
else
	include "modules/dashboard/index.php";
$mod = getIndex("mod","dashboard");*/
?>