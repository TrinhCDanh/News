<?php  
	$loaitin = new Loaitin();
	$ac = Utils::getIndex("ac");

	$theloai = new Theloai();
  $getAll = $theloai->getAll();

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
		else if($loaitin->isLoaitinExist($name_loaitin))
			$err .= "Loại tin đã tồn tại";
		else if ($ac=="saveAdd") {
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
		else if ($ac=="saveEdit") {	
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
		  <li class="active">Thể loại</li>
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