<?php  
$post = new Post();
$ac = Utils::getIndex("ac");
$getById_baiviet = $post->getById(Utils::getIndex("id"));

$loaitin = new Loaitin();
$getAll = $loaitin->getAll();
$id_baiviet = Utils::getIndex("id");


if ($ac == "send") {
  $post->sendBaiviet($id_baiviet);
  ?>
    <script language="javascript">
			swal('Thành công!','Click Ok để tiếp tục!','success');
			$('.swal2-confirm').click(function(){
			  window.location="index.php?mod=baigui&ac=listdagui";
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
			<span>Quản lý bài gửi</span>
		</h1><!-- End Title -->
	
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="index.php?mod=dashboard">Dashboard</a></li>
		  <li class="active">Bài gửi</li>
		</ol><!--breadcrum end-->
	
		<section class="row component-section dashboard">
			 <?php
				if ($ac == "listchuagui") 
					include "modules/baigui/listchuagui.php";
				else if ($ac == "listdagui")
					include "modules/baigui/listdagui.php";
				else if ($ac == "listyeucau")
					include "modules/baigui/listyeucau.php";	
  		?>
		</section>

</div>
</div>