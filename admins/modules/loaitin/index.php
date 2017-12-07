<?php  
	$loaitin = new Loaitin();
	$theloai = new Theloai();

	$ac = Utils::getIndex("ac");
  $getAll = $theloai->getAll();
  $getIdLoaitin = $loaitin->getById(Utils::getIndex("id"));

	$name_loaitin = Utils::postIndex("name_loaitin");
	$err = "";

	if ($ac=="delete") {
		$loaitin->delete(Utils::getIndex("id"));
		?>
	    <script language="javascript">
				$('.swal2-confirm').click(function(){
				  window.location="index.php?mod=loaitin";
				});
			</script>
    <?php
	}
	else if(isset($_POST["submit"])) {
		if(!isValidText($name_loaitin))
			$err .= "Tên loại tin không được chứa kí tự đặc biệt!"; 
		else if ($ac=="saveAdd") {
			if($loaitin->isLoaitinExist($name_loaitin))
				$err .= "Loại tin đã tồn tại";
			else {
				$loaitin->saveAddNew();
				?>
			    <script language="javascript">
						swal('Thành công!','Click Ok để tiếp tục!','success');
						$('.swal2-confirm').click(function(){
						  window.location="index.php?mod=loaitin";
						});
					</script>
		    <?php 
		  }
		}
		else if ($ac=="saveEdit") {
			if ($name_loaitin != $getIdLoaitin["name_loaitin"]) {
				if($loaitin->isLoaitinExist($name_loaitin))
					$err .= "Loại tin đã tồn tại";
			}
			if ($err == "")	{
				$loaitin->saveEdit(Utils::getIndex("id"));
				?>
			    <script language="javascript">
						swal('Thành công!','Click Ok để tiếp tục!','success');
						$('.swal2-confirm').click(function(){
						  window.location="index.php?mod=loaitin";
						});
					</script>
		    <?php 
		  }
		}
	}
?>
<div id="content" class="pmd-content inner-page">

	<!--tab start-->
	<div class="container-fluid full-width-container data-tables">
		<!-- Title -->
		<h1 class="section-title" id="services">
			<span>Quản lý loại tin</span>
		</h1><!-- End Title -->
	
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="index.php?mod=dashboard">Dashboard</a></li>
		  <li class="active">Loại tin</li>
		</ol><!--breadcrum end-->

		<section class="row component-section dashboard">
		
			<!-- table card title and description -->
			<?php include ROOT."/admins/modules/loaitin/addvedit.php"; ?>
			<!-- table card title and description end -->
			
			<!-- table card code and example -->
			<?php include ROOT."/admins/modules/loaitin/showloaitin.php"; ?>
			<!-- table card example end -->
				
				 <!-- table card code and example end -->
		</section>

	</div>
</div>