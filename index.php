<?php
include "config/config.php";
include ROOT."/include/function.php";
spl_autoload_register("loadClass");
if (!isset($_SESSION)) session_start();
$mod = Utils::getIndex("mod");
if ($mod == "logout") {
  unset($_SESSION["user_login"]);
  unset($_SESSION["user_data"]);
} 
$theloai = new Theloai();
$loaitin = new Loaitin();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>FoxCoy | Homepage</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#1d272b">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- TEXT FONT-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fredoka+One|PT+Sans|Permanent+Marker|Righteous|Questrial|Signika|Bree+Serif|Comfortaa|Orbitron|Aldrich">
    <!-- SYMPOL-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="images/fox3.png" type="image/x-icon">
    <!-- BOOTSTRAP-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- // CSS-->
    
    <link href="css/hover.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">
    <!-- JQUERY LIBRARY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <!-- // Smooth Sroll Page   -->
    <script src="js/smoothscroll/SmoothScrolla.js"></script>
    
    <!-- // Circle Chart-->
    <script src="js/jquery.circlechart.js"></script>
    <!--script(src='js/responsiveslides.min.js')-->
    <!--script(src='js/jquery.bxslider.js')-->
    <!--script(src='js/adb.js')-->
    <!--link(href="css/hp-slider.css" rel="stylesheet")-->
    <!--link(href="css/jquery.bxslider.css" rel="stylesheet")-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js"></script>

    <!-- Propeller css -->
<!-- build:[href] assets/css/ -->
<link rel="stylesheet" type="text/css" href="assets/css/propeller.min.css">
<!-- /build -->

<!-- DataTables css-->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.1.0/css/responsive.bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/select/1.2.0/css/select.dataTables.min.css">
<!-- Propeller dataTables css-->

<link rel="stylesheet" type="text/css" href="components/data-table/css/pmd-datatable.css">

<!-- Propeller date time picker css-->
<link rel="stylesheet" type="text/css" href="components/datetimepicker/css/bootstrap-datetimepicker.css" />
<link rel="stylesheet" type="text/css" href="components/datetimepicker/css/pmd-datetimepicker.css" />

<!-- Propeller theme css-->
<link rel="stylesheet" type="text/css" href="themes/css/propeller-theme.css" />

<!-- Propeller admin theme css-->
<link rel="stylesheet" type="text/css" href="themes/css/propeller-admin.css">

<!-- Custom css by TCD -->
<link rel="stylesheet" href="assets/css/custom.css">
<!-- message box style -->
<script src="assets/js/jquery-1.12.2.min.js"></script>
<script language="javascript" src="assets/ckeditor/ckeditor.js" type="text/javascript"></script>

<script src="assets/js/sweetalert.js"></script>
<link rel="stylesheet" href="assets/css/sweetalert.css">

<!-- // Owl Carousel-->
    <script src="js/owl.carousel.js"></script>
<!-- Form Calender -->
<script src="assets/js/birthday.js"></script>
<link rel="stylesheet" href="assets/css/birthday.css">

<link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <div id="wrapper">
      <!-- navbar -->
      <?php include "include/navbar.php"; ?>
      <!-- navbar end -->
      <!--include modules/m_slick.pug-->
      <?php include "include/mod.php"; ?>
      <div class="clear-fix"></div>
      <!-- Footer and js bottom -->
      <?php include "include/footer.php"; ?>
      <!-- footer and js bottom end-->
    </div>
  </body>
</html>




