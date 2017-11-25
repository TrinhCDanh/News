<?php  
	$post = new Post();
	$ac = Utils::getIndex("ac");

	$loaitin = new Loaitin();
	$getAll = $loaitin->getAll();

	$chitiet_duyetbai = new Chitiet_duyetbai();
	$getId_chitiet_duyetbai = $chitiet_duyetbai->getById(Utils::getIndex("id"));

	$name_tacgia = $admin->getById($_SESSION["admin_data"]["id_admin"]); 
	$info = "";
	$err = "";

	$id = Utils::getIndex("id");
	$row = $post->getById($id);
	
	$name_baiviet = postIndex("name_baiviet", "");
	$tomtat_baiviet = postIndex("tomtat_baiviet", "");
	$noidung_baiviet = postIndex("noidung_baiviet", "");
	if(isset($_POST["submit"]))
		$anh_baiviet = $_FILES["anh_baiviet"]["name"];
	$id_loaitin = postIndex("id_loaitin", "");
	$duyet_baiviet = postIndex("duyet_baiviet", "");

	if ($ac == "delete") {
  	$post->delete(Utils::getIndex("id"));
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
		    $post->saveAddNew($name_tacgia["name_admin"],$duyet_baiviet=1);
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
				$post->saveEdit(Utils::getIndex("id"), $anh_baiviet);
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
	else if(isset($_POST["request"]) && $ac == "requestEdit") {
		if($name_tacgia["id_admin"] != $getId_chitiet_duyetbai["id_admin"]) {
			?>
		    <script language="javascript">
					swal('Thất bại!','Bài viết đang được duyệt bởi Admin khác!','error');
					$('.swal2-confirm').click(function(){
					  window.location="index.php?mod=baiviet&ac=showchuaduyet";
					});
				</script>
	    <?php
		}
		else {
			$post->requestEdit(Utils::getIndex("id"));
			$chitiet_duyetbai->requestEdit($name_tacgia["id_admin"],$id);
	  	?>
		    <script language="javascript">
					swal('Thành công!','Click Ok để tiếp tục!','success');
					$('.swal2-confirm').click(function(){
					  window.location="index.php?mod=baiviet&ac=showchuaduyet";
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
			<span>Quản lý bài viết</span>
		</h1><!-- End Title -->
	
		<!--breadcrum start-->
		<ol class="breadcrumb text-left">
		  <li><a href="index.php?mod=dashboard">Dashboard</a></li>
		  <li class="active">Bài viết <?php print_r($getId_chitiet_duyetbai); ?></li>
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
				if ($ac == "showdaduyet" || $ac == "delete") 
					include "modules/baiviet/showdaduyet.php";
				else if ($ac == "showchuaduyet") 
					include "modules/baiviet/showchuaduyet.php";
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


