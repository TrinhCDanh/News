<?php
include "config/config.php";
include ROOT."/include/function.php";
spl_autoload_register("loadClass");
if (!isset($_SESSION)) session_start();
$mod = Utils::getIndex("mod");
?>
<!doctype html>
<html lang="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Propeller Admin Dashboard">
<meta content="width=device-width, initial-scale=1, user-scalable=no" name="viewport">

<title>Admin - Material Design Responsive Dashboard Template Preview - Propeller</title>
<meta name="description" content="Admin is a material design and bootstrap based responsive dashboard template created mainly for admin and backend applications."/>

<link rel="shortcut icon" type="image/x-icon" href="../themes/images/Newspaper-icon-1.png">

<!-- Google icon -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Bootstrap css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Propeller css -->
<!-- build:[href] assets/css/ -->
<link rel="stylesheet" type="text/css" href="../assets/css/propeller.min.css">
<!-- /build -->

<!-- DataTables css-->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.0/css/responsive.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.0/css/select.dataTables.min.css">
<!-- Propeller dataTables css-->

<link rel="stylesheet" type="text/css" href="../components/data-table/css/pmd-datatable.css">

<!-- Propeller date time picker css-->
<link rel="stylesheet" type="text/css" href="../components/datetimepicker/css/bootstrap-datetimepicker.css" />
<link rel="stylesheet" type="text/css" href="../components/datetimepicker/css/pmd-datetimepicker.css" />

<!-- Propeller theme css-->
<link rel="stylesheet" type="text/css" href="../themes/css/propeller-theme.css" />

<!-- Propeller admin theme css-->
<link rel="stylesheet" type="text/css" href="../themes/css/propeller-admin.css">
<!-- message box style -->
<script src="../assets/js/jquery-1.12.2.min.js"></script>
<script language="javascript" src="../assets/ckeditor/ckeditor.js" type="text/javascript"></script>

<script src="../assets/js/sweetalert.js"></script>
<link rel="stylesheet" href="../assets/css/sweetalert.css">
<!-- Form Calender -->
<script src="../assets/js/birthday.js"></script>
<link rel="stylesheet" href="../assets/css/birthday.css">


</head>

<body>
  <div id="wrapper-two" style="background-color: #fff; min-height: 100%;">
    <header class="header-view">
      <nav class="navbar navbar-inverse nav-sign-in">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <i class="fa fa-bars" aria-hidden="true"></i>                      
            </button>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
              <?php  
                if(!isset($_SESSION["user_login"])) {
                  ?>
                    <li><a href="index.php?mod=register"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a></li>
                    <li><a href="user/index.php"><i class="fa fa-sign-in" aria-hidden="true"></i> Login</a></li>
                  <?php
                }
                else {
                  ?>
                    <li><a href="user/index.php?mod=account"><i class="fa fa-user-plus" aria-hidden="true"></i> <?php echo $_SESSION["user_data"]["name_user"] ?></a></li>
                    <li><a href="index.php?mod=logout"><i class="fa fa-sign-in" aria-hidden="true"></i> Logout</a></li>
                  <?php
                }
              ?>
            </ul>
          </div>
        </div>
      </nav>
      <div class="jumbotron">
        <div class="header-page">
          <h1><i class="fa fa-newspaper-o"></i> Vnnews</h1>
        </div>
      </div>
    </header>

    <div class="container middle-page">
      <?php include "include/mod.php";
      if(isset($_SESSION["user_data"]))
        print_r($_SESSION["user_data"]);?>
    </div>
    

  </div>
    <!-- /#wrapper -->

<!-- jQuery -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="../assets/js/propeller.min.js"></script>


</body>
</html>




