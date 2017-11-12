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
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="img/TCD4.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="../font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style-admin.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/animate.css">
    <!-- commobox style -->
    <link rel="stylesheet" type="text/css" href="../css/cs-select.css" />
    <link rel="stylesheet" type="text/css" href="../css/cs-skin-elastic.css" />
     <!-- message box style -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="../js/sweetalert.js"></script>
    <link rel="stylesheet" href="../css/sweetalert.css">
    
    <script type="text/javascript">
        $(document).ready(function() {
        $('.data-table').DataTable();
    } );
    </script>
    
</head>
<body>
  <div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper"> 
      <?php include "modules/menu.php"; ?>
    </div>
    <!-- /#sidebar-wrapper -->
    <!-- Page Content -->
    <div id="page-content-wrapper">
        <div class="container-fluid xyz top-nav">
            <?php include "modules/banner.php"; ?>
        </div>
        <div class="container-fluid xyz">
            <?php include ROOT . '/user/mod.php'; ?>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

  </div>
    <!-- /#wrapper -->

<!-- jQuery -->
<script src="../js/bootstrap.min.js"></script>
<script src="../js/sidebar_menu.js"></script>
<script src="../js/animation-dropdown.js"></script>
<!-- commobox style -->
<script src="../js/classie.js"></script>
<script src="../js/selectFx.js"></script>
<script src="../js/custom.js"></script>
<!-- Data table-->
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css">


</body>
</html>