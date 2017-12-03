<?php  
	$post = new Post();
	$ac = Utils::getIndex("ac");
	$getById_baiviet = $post->getById(Utils::getIndex("id"));

	$loaitin = new Loaitin();
	$getAll = $loaitin->getAll();

?>
	

<div id="content" class="pmd-content inner-page">

<!--tab start-->
<div class="container-fluid full-width-container data-tables">
		<!-- Title -->
		<h1 class="section-title" id="services">
			<span>Xem bài viết đã đăng</span>
		</h1><!-- End Title -->
	
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="index.php?mod=dashboard">Dashboard</a></li>
		  <li class="active">Bài đă đăng</li>
		</ol><!--breadcrum end-->
		
		<section class="row component-section dashboard">
			 <?php include "modules/baidadang/showdaduyet.php" ?>
		</section>

</div>
</div>


