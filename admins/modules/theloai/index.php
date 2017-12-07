<?php  
	$theloai = new Theloai();
	$ac = Utils::getIndex("ac");

	$name_theloai = Utils::postIndex("name_theloai");
	$err = "";

	if ($ac == "delete") {
		$theloai->delete(Utils::getIndex("id"));
		?>
	    <script language="javascript">
				$('.swal2-confirm').click(function(){
				  window.location="index.php?mod=theloai";
				});
			</script>
    <?php
	}	
	else if(isset($_POST["submit"])) {
		if(!isValidText($name_theloai))
			$err .= "Tên thể loại không được chứa kí tự đặc biệt!";
		else if($theloai->isTheloaiExist($name_theloai))
			$err .= "Thể loại đã tồn tại";
		else if ($ac == "saveEdit") {	
			$theloai->saveEdit(Utils::getIndex("id"));
			?>
		    <script language="javascript">
					swal('Thành công!','Click Ok để tiếp tục!','success');
					$('.swal2-confirm').click(function(){
					  window.location="index.php?mod=theloai";
					});
				</script>
	    <?php
		}
		else if ($ac == "saveAdd") {	
			$theloai->saveAddNew();
			?>
		    <script language="javascript">
					swal('Thành công!','Click Ok để tiếp tục!','success');
					$('.swal2-confirm').click(function(){
					  window.location="index.php?mod=theloai";
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
			<span>Quản lý thể loại</span>
		</h1><!-- End Title -->
	
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="index.php?mod=dashboard">Dashboard</a></li>
		  <li class="active">Thể loại</li>
		</ol><!--breadcrum end-->
		
		<section class="row component-section dashboard">
		
			<?php include ROOT."/admins/modules/theloai/addvedit.php"; ?>
			
			<?php include ROOT."/admins/modules/theloai/showtheloai.php"; ?>
		
		</section>

</div>
</div>

