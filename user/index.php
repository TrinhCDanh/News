<?php
include "../config/config.php";
include ROOT."/include/function.php";
if (!isset($_SESSION)) session_start();
spl_autoload_register("loadClass");
$db= new Db();
$mod = Utils::getIndex("mod");
if ($mod == "login")
{
	$u = Utils::postIndex("name_login");
	$p = md5(Utils::postIndex("pass_login"));
	$sql ="select * from user where name_user=:u and pass_user=:p";
	$arr = array(":u"=>$u, ":p"=>$p);
	$data = $db->exeQuery($sql, $arr);
	if ($db->getRowCount()>0) {
		$_SESSION["user_login"] = 1;
		$_SESSION["user_data"] = $data[0];
	}
    header('Location: index.php');
}
if ($mod == "logout") {
	unset($_SESSION["user_login"]);
	unset($_SESSION["user_data"]);
}
if (!isset($_SESSION["user_login"])) {
	?>
      <script language="javascript">
        window.location="login.html";
      </script>
    <?php
    exit;
}
?>
<!doctype html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Propeller Admin Dashboard">
		<meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">

		<title>User - VNNEWS</title>
		<meta name="description" content="Admin is a material design and bootstrap based responsive dashboard template created mainly for admin and backend applications."/>

		<link rel="shortcut icon" type="image/x-icon" href="../public/themes/images/Newspaper-icon-1.png">

		<!-- Google icon -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

		<!-- Bootstrap css -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

		<!-- Propeller css -->
		<!-- build:[href] assets/css/ -->
		<link rel="stylesheet" type="text/css" href="../public/assets/css/propeller.min.css">
		<!-- /build -->

		<!-- DataTables css-->
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.0/css/responsive.bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.0/css/select.dataTables.min.css">
		<!-- Propeller dataTables css-->

		<link rel="stylesheet" type="text/css" href="../public/components/data-table/css/pmd-datatable.css">

		<!-- Propeller date time picker css-->
		<link rel="stylesheet" type="text/css" href="../public/components/datetimepicker/css/bootstrap-datetimepicker.css" />
		<link rel="stylesheet" type="text/css" href="../public/components/datetimepicker/css/pmd-datetimepicker.css" />

		<!-- Propeller theme css-->
		<link rel="stylesheet" type="text/css" href="../public/themes/css/propeller-theme.css" />

		<!-- Propeller admin theme css-->
		<link rel="stylesheet" type="text/css" href="../public/themes/css/propeller-admin.css">
		<!-- message box style -->
		<script src="../public/assets/js/jquery-1.12.2.min.js"></script>
		<script language="javascript" src="../public/assets/ckeditor/ckeditor.js" type="text/javascript"></script>

		<script src="../public/assets/js/sweetalert.js"></script>
		<link rel="stylesheet" href="../public/assets/css/sweetalert.css">
		<!-- Form Calender -->
		<script src="../public/assets/js/birthday.js"></script>
		<link rel="stylesheet" href="../public/assets/css/birthday.css">
	</head>

	<body>

	<!-- Header Starts -->
	<!--Start Nav bar -->
	<?php include "include/navbar.php"; ?>
	<!--End Nav bar -->
	<!-- Header Ends -->

	<!-- Sidebar Starts -->
	<?php include "include/sidebar.php"; ?>
	<!-- Sidebar Ends -->  
	    
	<!--content area start-->
	<?php include "include/mod.php"; ?>
	<!--end content area-->

	<!-- Footer Starts -->
	<!--footer start-->
	<?php include "include/footer.php"; ?>
	<!--footer end-->
	<!-- Footer Ends -->

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="../public/assets/js/propeller.min.js"></script> 

	<?php 
		if($mod == "theloai" || $mod == "loaitin" || $mod == "baiviet" || $mod == "baigui" || $mod == "baidadang" || $mod == "baidahuy" || $mod == "history" || $mod == "dashboard")
		    include "modules/custom_js/data_table.html";
		else
		    include "modules/custom_js/dashboard.html";
	?>

	<script>
		$(document).ready(function(){
			$(function () {
				$('[data-toggle="tooltip"]').tooltip()
			})
		});
	</script>

	</body>
</html>