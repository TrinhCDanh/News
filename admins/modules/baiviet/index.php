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
	$id_loaitin = postIndex("id_loaitin", "");
	$duyet_baiviet = postIndex("duyet_baiviet", "");

	if ($ac == "delete") {
  	$post->huyBaiviet(Utils::getIndex("id"));
  	?>
	    <script language="javascript">
				swal('Thành công!','Click Ok để tiếp tục!','success');
				$('.swal2-confirm').click(function(){
				  window.location="index.php?mod=baiviet&ac=showdaduyet";
				});
			</script>
    <?php
  }
	else if(isset($_POST["submit"]) && $ac == "saveEdit") {
		$post->postBaiviet(Utils::getIndex("id"));
  	?>
	    <script language="javascript">
				swal('Thành công!','Click Ok để tiếp tục!','success');
				$('.swal2-confirm').click(function(){
				  window.location="index.php?mod=baiviet&ac=showdaduyet";
				});
			</script>
    <?php	
	}
	else if(isset($_POST["request"]) && $ac == "requestEdit") {
		if(!empty($getId_chitiet_duyetbai) && $name_tacgia["id_admin"] != $getId_chitiet_duyetbai["id_admin"]) {
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
		  <li class="active">Bài viết</li>
		  <?php 
		  	$content = ""; 
		  	if ($ac == "showdaduyet" || $ac == "delete") 
					$content .= "Danh sách bài viết đã đăng";
				else if ($ac == "showchuaduyet") 
					$content .= "Danh sách bài viết chưa đăng";
		  	?>
		   <li class="active"><?php echo $content; ?></li>
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
					$info = "Nội dung bài viết";
					if(!empty($getId_chitiet_duyetbai) && $name_tacgia["id_admin"] != $getId_chitiet_duyetbai["id_admin"]) {
						?>
					    <script language="javascript">
								swal('Thất bại!','Bài viết đang được duyệt bởi Admin khác!','error');
								$('.swal2-confirm').click(function(){
								  window.location="index.php?mod=baiviet&ac=showchuaduyet";
								});
							</script>
				    <?php
					}
					else
					 include "modules/baiviet/editbaiviet.php";
				}
  				
  		?>
		</section>

</div>
</div>


