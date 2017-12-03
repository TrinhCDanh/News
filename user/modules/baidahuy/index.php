<?php  
	$post = new Post();
	$ac = Utils::getIndex("ac");
	$getById_baiviet = $post->getById(Utils::getIndex("id"));

	$loaitin = new Loaitin();
	$getAll = $loaitin->getAll();

	$chitiet_suabai = new Chitiet_suabai();
	$chitiet_duyetbai = new Chitiet_duyetbai();

	$id = Utils::getIndex("id");

	if ($ac == "delete") {
  	$chitiet_suabai->delete($id);
  	$chitiet_duyetbai->delete($id);
  	$post->delete($id);
  	?>
	    <script language="javascript">
				swal('Thành công!','Click Ok để tiếp tục!','success');
				$('.swal2-confirm').click(function(){
				  window.location="index.php?mod=baidahuy&ac=showdahuy";
				});
			</script>
    <?php
  }
?>
	

<div id="content" class="pmd-content inner-page">

<!--tab start-->
<div class="container-fluid full-width-container data-tables">
		<!-- Title -->
		<h1 class="section-title" id="services">
			<span>Xem bài viết đã bị hủy</span>
		</h1><!-- End Title -->
	
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="index.php?mod=dashboard">Dashboard</a></li>
		  <li class="active">Bài bị hủy</li>
		</ol><!--breadcrum end-->
		
		<section class="row component-section dashboard">
			 <?php include "modules/baidahuy/showdahuy.php" ?>
		</section>

</div>
</div>


