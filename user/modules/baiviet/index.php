<?php  
	$post = new Post();
	$ac = Utils::getIndex("ac");
	$name_tacgia = $user->getById($_SESSION["user_data"]["id_user"]); 
	$info = "";
	$err = "";

	if ($ac == "saveAdd") {
    $post->saveAddNew($name_tacgia["name_user"]);
    ?>
	    <script language="javascript">
				swal('Thành công!','Click Ok để tiếp tục!','success');
				$('.swal2-confirm').click(function(){
				  window.location="index.php?mod=baiviet";
				});
			</script>
    <?php
  }
  else if ($ac == "saveEdit") {
  	$post->saveEdit(Utils::getIndex("id"));
  	?>
	    <script language="javascript">
				swal('Thành công!','Click Ok để tiếp tục!','success');
				$('.swal2-confirm').click(function(){
				  window.location="index.php?mod=baiviet";
				});
			</script>
    <?php
  }
  else if ($ac == "delete") {
  	$post->delete(Utils::getIndex("id"));
  	?>
	    <script language="javascript">
				swal('Thành công!','Click Ok để tiếp tục!','success');
				$('.swal2-confirm').click(function(){
				  window.location="index.php?mod=baiviet";
				});
			</script>
    <?php
  }


	?>
	<div class="content-block">
  	<div class="content-block-header col-xs-12 col-lg-12">
  		<p>
				<?php  
					if ($ac == "addNew") 
	          $info = "Thêm bài viết mới";
	        else if($ac == "edit")
	        	$info = "Chỉnh sửa bài viết";
	        else
	          $info = "Danh sách bài viết";
	        echo $info; 
				?>
			</p>
  	</div>
  	<div class="col-xs-12 col-lg-12">
  		<?php  
  			if($ac == "addNew") 
					include "modules/baiviet/addbaiviet.php";
				else if($ac == "edit")
					include "modules/baiviet/editbaiviet.php";
				else 
					include "modules/baiviet/showbaiviet.php";
  		?>
  	</div>
  </div>

	<?php

	


?>