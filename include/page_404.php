<?php
include "../config/config.php";
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
$baiviet = new Post();
$binhluan = new Binhluan();
$user = new User();
if (isset($_SESSION["user_login"])) {
  $data_user = $user->getById($_SESSION["user_data"]["id_user"]); 
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Vnnews | Trang báo điện tử hàng đầu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#1d272b">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- TEXT FONT-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Fredoka+One|PT+Sans|Permanent+Marker|Righteous|Questrial|Signika|Bree+Serif|Comfortaa|Orbitron|Aldrich|Noto+Sans">
    <!-- SYMPOL-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../public/themes/images/Newspaper-icon-1.png" type="image/x-icon">
    <!-- BOOTSTRAP-->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- // CSS-->
    
    <link href="../public/css/hover.css" rel="stylesheet">
    <link href="../public/css/animate.css" rel="stylesheet">
    <link href="../public/css/owl.carousel.min.css" rel="stylesheet">
    <!-- JQUERY LIBRARY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
    <!-- // Smooth Sroll Page   -->
    <script src="../public/js/smoothscroll/SmoothScrolla.js"></script>
    
    <!-- // Circle Chart-->
    <script src="../public/js/jquery.circlechart.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.20/jquery.fancybox.min.js"></script>

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

    <!-- Custom css by TCD -->
    <link rel="stylesheet" href="../public/assets/css/custom.css">
    <!-- message box style -->
    <script src="../public/assets/js/jquery-1.12.2.min.js"></script>
    <script language="javascript" src="../public/assets/ckeditor/ckeditor.js" type="text/javascript"></script>

    <script src="../public/assets/js/sweetalert.js"></script>
    <link rel="stylesheet" href="../public/assets/css/sweetalert.css">

    <!-- // Owl Carousel-->
    <script src="../public/js/owl.carousel.js"></script>
    <!-- Form Calender -->
    <script src="../public/assets/js/birthday.js"></script>
    <link rel="stylesheet" href="../public/assets/css/birthday.css">

    <style type="text/css">
      .main-content {
        display: flex;
        align-items: center;
      }
      .title-404 {
        font-size: 140px;
        font-weight: bold;
        color: #4285f4;
      }
      .content-404 {
        font-size: 50PX;
      }
      .detail-404 {
        font-size: 20px;
        color: #323a45;
        padding: 0 20px;
      }
    </style>
  </head>
  <body>
      <!--include modules/m_slick.pug-->
      <section class="main-content" style="height: 100%;">
        <div class="page-404-content">
          <header class="title-404 text-center">
          <p>404</p>
          <p class="content-404">PAGE NOT FOUND</p>
        </header>
        <article class="detail-404 text-center">
          <p>Server cannot find the file you requested. File has either been moved or deleted, or you entered the wrong URL or document name. Look at the URL. If a word looks misspelled, then correct it and try it again. If that doesnt work You can try our search option to find what you are looking for.</p>
          <p><a href="../index.php" class="btn btn-primary pmd-ripple-effect">Go Home</a></p>
        </article>
        </div>
        
      </section>

      <div class="clear-fix"></div>

  
   
  </body>
  <script src="js/custom.js">   </script>
</html>