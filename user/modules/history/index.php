<?php  
	$id_baiviet = getIndex("id_baiviet", "");
	//echo $id_baiviet;
	$chitietsuabai = new Chitiet_suabai();
	$baiviet = new Post();

	$data_chitietsuabai = $chitietsuabai->getByBaiviet($id_baiviet);
	$data_baiviet = $baiviet->getById($id_baiviet);
	//print_r($data_chitietsuabai);

	$post = new Post();
	$ac = Utils::getIndex("ac");
	$getById_baiviet = $post->getById(Utils::getIndex("id"));

	$chitiet_duyetbai = new Chitiet_duyetbai();

	$loaitin = new Loaitin();
	$getAll = $loaitin->getAll();

	$name_tacgia = $user->getById($_SESSION["user_data"]["id_user"]); 
	$info = "";
	$err = "";

	$id = Utils::getIndex("id");
	$row = $post->getById($id_baiviet);

	
?>

<div id="content" class="pmd-content inner-page">

<!--tab start-->
<div class="container-fluid full-width-container data-tables">
	<!-- Title -->
	<h1 class="section-title" id="services">
		<span>Lịch sử bài viết</span>
	</h1><!-- End Title -->

	<!--breadcrum start-->
	<ol class="breadcrumb text-left">
	  <li><a href="index.php?mod=dashboard">Dashboard</a></li>
	  <li class="active">Lịch sử</li>
	</ol><!--breadcrum end-->
	
	<?php  
    if($err != "") {
      ?>
        <div class="alert alert-danger">      
          <?php echo $err; ?>
        </div>
      <?php
    }
  ?>
	
	<section class="row component-section dashboard">
		 <?php
		 	if(!empty($data_chitietsuabai))
				include "modules/history/showhistoryedit.php";
			else if ($ac != "showsuabai")
				include "modules/history/shownoidung.php";
			else
				include "modules/history/showsuabai.php";		
		?>
	</section>

</div>
</div>