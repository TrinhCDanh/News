<?php  
	$post = new Post();
	$chitiet_suabai = new Chitiet_suabai();
	$chitiet_duyetbai = new Chitiet_duyetbai();
	$loaitin = new Loaitin();

	$ac = Utils::getIndex("ac");

	$getById_baiviet = $post->getById(Utils::getIndex("id"));
	$getAll = $loaitin->getAll();

	$name_tacgia = $user->getById($_SESSION["user_data"]["id_user"]); 
	$info = $err = "";

	$id = Utils::getIndex("id");
	$row = $post->getById($id);
	
	$name_baiviet = postIndex("name_baiviet", "");
	$tomtat_baiviet = postIndex("tomtat_baiviet", "");
	$noidung_baiviet = postIndex("noidung_baiviet", "");
	$trangthai_baiviet = postIndex("trangthai_baiviet", "");
	if(isset($_POST["submit"]))
		$anh_baiviet = $_FILES["anh_baiviet"]["name"];
	$id_loaitin = postIndex("id_loaitin", "");

	if ($ac == "delete") {
  	$chitiet_suabai->delete($id);
  	$chitiet_duyetbai->delete($id);
  	$post->delete($id);
  	?>
	    <script language="javascript">
				swal('Thành công!','Click Ok để tiếp tục!','success');
				$('.swal2-confirm').click(function(){
				  window.location="index.php?mod=baiviet&ac=showbaiviet";
				});
			</script>
    <?php
  }
	else if(isset($_POST["submit"])) {
		if ($ac == "saveAdd") {
			if (isValidImage($_FILES["anh_baiviet"]) != "") {
				$err .= isValidImage($_FILES["anh_baiviet"]);
			}
			else {
		    $post->saveAddNew($name_tacgia["name_user"]);
		    ?>
			    <script language="javascript">
						swal('Thành công!','Click Ok để tiếp tục!','success');
						$('.swal2-confirm').click(function(){
						  window.location="index.php?mod=baiviet&ac=showbaiviet";
						});
					</script>
		    <?php
	  	}
	  }
	  else if ($ac == "saveEdit") {
	  	if (isset($_FILES["anh_baiviet"]) && $_FILES["anh_baiviet"]["name"] != "") {
				$anh_baiviet = $_FILES["anh_baiviet"]["name"];
				if (isValidImage($_FILES["anh_baiviet"]) != "") {
					$err .= isValidImage($_FILES["anh_baiviet"]);
				}
	  	}
			else
				$anh_baiviet = $row["anh_baiviet"];
			if ($err == "") {
				if($trangthai_baiviet == 1) {
					$yeucau_baiviet = $getById_baiviet["yeucau_baiviet"];
					if($yeucau_baiviet != "")
						$chitiet_suabai->addEdit($name_tacgia["id_user"], $id, $anh_baiviet, $yeucau_baiviet);
				}
				$post->saveEditUser(Utils::getIndex("id"), $anh_baiviet);
		  	?>
			    <script language="javascript">
						swal('Thành công!','Click Ok để tiếp tục!','success');
						$('.swal2-confirm').click(function(){
						  window.location="index.php?mod=baiviet&ac=showbaiviet";
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
			<span>Quản lý bài nháp</span>
		</h1><!-- End Title -->
	
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="index.php?mod=dashboard">Dashboard</a></li>
		  <li class="active">Bài nháp</li>
		  <?php
		  	$content = ""; 
		  	if ($ac == "showbaiviet")
					$content .= "Danh sách bài nháp";
				else if (Count($row) == 0)
					$content .= "Thêm bài mới";
				else
					$content .= "Sửa bài nháp";
		  ?>
		  <li class="active"><?php echo $content; ?></li>
		</ol><!--breadcrum end-->
		
		<?php  
      if($err != "") {
        ?>
        	<div class="col-lg-12">
	          <div class="alert alert-danger">      
	            <?php echo $err; ?>
	          </div>
	        </div>
        <?php
      }
    ?>
		
		<section class="row component-section dashboard">
			 <?php
				if ($ac == "showbaiviet" || $ac == "delete") 
					include "modules/baiviet/showbaiviet.php";
				else if (Count($row) == 0) {
  				$info = "Thêm bài viết mới";
					include "modules/baiviet/addbaiviet.php";
  			}
				else {
					$info = "Chỉnh sửa viết mới";
					include "modules/baiviet/editbaiviet.php";
				}
  				
  		?>
		</section>

</div>
</div>


