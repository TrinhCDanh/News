<?php 
  $title = "Home Page";
  $user = new User();
  $row = $user->getById($_SESSION["user_data"]["id_user"]); 
?>
<div class="pmd-sidebar-overlay"></div>

<!-- Left sidebar -->
<aside class="pmd-sidebar sidebar-default pmd-sidebar-slide-push pmd-sidebar-left pmd-sidebar-open bg-fill-darkblue sidebar-with-icons" role="navigation">
	<ul class="nav pmd-sidebar-nav">
		
		<!-- User info -->
		<li class="dropdown pmd-dropdown pmd-user-info visible-xs visible-md visible-sm visible-lg">
			<a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" aria-expandedhref="javascript:void(0);">
				<div class="media-left">
					<img src="../themes/images/user-icon.png" alt="New User">
				</div>
				<div class="media-body media-middle"><?php echo $row["name_user"]; ?></div>
				<div class="media-right media-middle"><i class="dic-more-vert dic"></i></div>
			</a>
			<ul class="dropdown-menu">
				<li><a href="index.php?mod=account">Tài khoản của tôi</a></li>
				<li><a href="index.php?mod=logout">Đăng xuât</a></li>
			</ul>
		</li><!-- End user info -->
		
		<li> 
			<a class="pmd-ripple-effect" href="index.php?mod=dashboard">	
				<i class="media-left media-middle material-icons md-dark pmd-sm" style="color: #C9C8C8">dashboard</i>
				<span class="media-body">Dashboard</span>
			</a> 
		</li>
		
		<li class="dropdown pmd-dropdown"> 
			<a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" href="javascript:void(0);">	
				<i class="media-left media-middle material-icons md-dark pmd-sm" style="color: #C9C8C8">library_books</i>
				<span class="media-body">Bài nháp</span>
				<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
			</a> 
			<ul class="dropdown-menu">
				<li><a href="index.php?mod=baiviet&ac=addNew">Thêm</a></li>
				<li><a href="index.php?mod=baiviet&ac=showbaiviet">Danh sách</a></li>
			</ul>
		</li>

		<li class="dropdown pmd-dropdown"> 
			<a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" href="javascript:void(0);">	
				<i class="media-left media-middle material-icons md-dark pmd-sm" style="color: #C9C8C8">mail</i> 
				<span class="media-body">Bài gửi</span>
				<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
			</a> 
			<ul class="dropdown-menu">
				<li><a href="index.php?mod=baigui&ac=listchuagui">Gửi bài</a></li>
				<li><a href="index.php?mod=baigui&ac=listdagui">Đang chờ duyệt</a></li>
				<li><a href="index.php?mod=baigui&ac=listyeucau">Sửa theo yêu cầu</a></li>
			</ul>
		</li>

		<li> 
			<a class="pmd-ripple-effect" href="index.php?mod=baiviet&ac=showdaduyet">	
				<i class="media-left media-middle material-icons md-dark pmd-sm" style="color: #C9C8C8">backup</i> 
				<span class="media-body">Bài đã đăng</span>
			</a> 
		</li>
		<li> 
			<a class="pmd-ripple-effect" href="index.php?mod=baiviet&ac=showdahuy">	
				<i class="media-left media-middle material-icons md-dark pmd-sm" style="color: #C9C8C8">delete_forever</i> 
				<span class="media-body">Bài đã hủy</span>
			</a> 
		</li>
		
	</ul>
</aside><!-- End Left sidebar -->