<?php  
	$baiviet = new Post();
	$user = new User();
	$binhluan = new Binhluan();

	$author = $user->getById($_SESSION["user_data"]["id_user"]); 
	$data_baiviet = $baiviet->getByAuthor($author["name_user"]);

	$data_binhluan = $binhluan->getAll();
	//$luotbinhluan = $binhluan->countBinhluan();
	$countBaivietbyUser = $baiviet->countBaivietbyUser();
	$countBaivietbyLoaitin = $baiviet->countBaivietbyLoaitin();

	$baidagui = $baidadang = $soluotxem = $baibihuy = $bainhap = $baiyeucausua = $luotbinhluan = 0;

	foreach ($data_baiviet as $row_baiviet) {
		if ($row_baiviet["trangthai_baiviet"] == 1) {
			if ($row_baiviet["duyet_baiviet"] == 1)
				$baidadang++;
			if ($row_baiviet["duyet_baiviet"] == 0)
				$baidagui++;
		}
		else {
			if ($row_baiviet["duyet_baiviet"] == 2)
				$baibihuy++;
			if ($row_baiviet["duyet_baiviet"] == 0 && $row_baiviet["yeucau_baiviet"] == "")
				$bainhap++;
			if ($row_baiviet["duyet_baiviet"] == 0 && $row_baiviet["yeucau_baiviet"] != "")
				$baiyeucausua++;
		}
		$soluotxem += $row_baiviet["luotxem_baiviet"];
		foreach ($data_binhluan as $row_binhluan) {
		 		if ($row_binhluan["id_baiviet"] == $row_baiviet["id_baiviet"])
		 			$luotbinhluan++;
		 } 
	}
?>

<div id="content" class="pmd-content content-area dashboard">

	<div class="container-fluid">
		<div class="row" id="card-masonry">

		<!-- Propeller Marketplace-->
		 <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 pmd-tooltip" data-toggle="tooltip" data-placement="bottom" title="Tổng số bài viết nháp">
		 	<a href="index.php?mod=baiviet&ac=showbaiviet">
				<div class="card pmd-z-depth info-page">
					<div class="tcd-card-title text-center">
						<h2 class="tcd-card-title-text">Bài nháp</h2>
					</div>
					<div class="tcd-card-body text-center" style="background-color: #64FFDA;">
						<i class="material-icons md-dark pmd-sm" style="color: #1f2f46;">library_books</i>
						<h2 class="tcd-card-body-text" style="color: #1f2f46;"> <?php echo $bainhap; ?></h2>
					</div>
				</div>
			</a>
		 </div><!-- end Propeller Marketplace -->

		 <!-- Propeller Marketplace-->
		 <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 pmd-tooltip" data-toggle="tooltip" data-placement="bottom" title="Tổng số bài viết đã được gửi và đang chờ duyệt">
		 	<a href="index.php?mod=baigui&ac=listdagui">
				<div class="card pmd-z-depth info-page">
					<div class="tcd-card-title text-center">
						<h2 class="tcd-card-title-text">Bài đã gửi</h2>
					</div>
					<div class="tcd-card-body text-center" style="background-color: #00B0FF;">
						<i class="material-icons md-dark pmd-sm" style="color: #1f2f46;">send</i>
						<h2 class="tcd-card-body-text" style="color: #1f2f46;"><?php echo $baidagui; ?></h2>
					</div>
				</div>
			</a>
		 </div><!-- end Propeller Marketplace -->
		 
		<!-- Propeller Marketplace-->
		 <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 pmd-tooltip" data-toggle="tooltip" data-placement="bottom" title="Các bài viết chưa được gửi cho Admin xét duyệt">
		 	<a href="index.php?mod=baigui&ac=listchuagui">
				<div class="card pmd-z-depth info-page">
					<div class="tcd-card-title text-center">
						<h2 class="tcd-card-title-text">Bài chưa gửi</h2>
					</div>
					<div class="tcd-card-body text-center" style="background-color: #76FF03;">
						<i class="material-icons md-dark pmd-sm" style="color: #1f2f46;">drafts</i>
						<h2 class="tcd-card-body-text" style="color: #1f2f46;"><?php echo $bainhap; ?></h2>
					</div>
				</div>
			</a>
		 </div><!-- end Propeller Marketplace -->

		  <!-- Propeller Marketplace-->
		 <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 pmd-tooltip" data-toggle="tooltip" data-placement="bottom" title="Những bài viết đã gửi nhưng bị yêu cầu sửa lại theo yêu cầu của Admin">
		 	<a href="index.php?mod=baigui&ac=listyeucau">
				<div class="card pmd-z-depth info-page">
					<div class="tcd-card-title text-center">
						<h2 class="tcd-card-title-text">Bài yêu cầu sửa</h2>
					</div>
					<div class="tcd-card-body text-center" style="background-color: #F44336;">
						<i class="material-icons md-dark pmd-sm" style="color: #1f2f46;">edit</i>
						<h2 class="tcd-card-body-text" style="color: #1f2f46;"><?php echo $baiyeucausua; ?></h2>
					</div>
				</div>
			</a>
		 </div><!-- end Propeller Marketplace -->

		 <!-- Propeller Marketplace-->
		 <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" data-toggle="tooltip" data-placement="bottom" title="Tổng số bài viết đã được Admin duyệt và đăng lên trang chủ">
		 	<a href="index.php?mod=baidadang">
				<div class="card pmd-z-depth info-page">
					<div class="tcd-card-title text-center">
						<h2 class="tcd-card-title-text">Bài được đăng</h2>
					</div>
					<div class="tcd-card-body text-center" style="background-color: #FFD600;">
						<i class="material-icons md-dark pmd-sm" style="color: #1f2f46;">history</i>
						<h2 class="tcd-card-body-text" style="color: #1f2f46;"><?php echo $baidadang; ?></h2>
					</div>
				</div>
			</a>
		 </div><!-- end Propeller Marketplace -->

		<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3"  data-toggle="tooltip" data-placement="bottom" title="Các bài viết bị hủy do không đạt yêu cầu hoặc bài viết đã cũ">
			<a href="index.php?mod=baidahuy">
				<div class="card pmd-z-depth info-page">
					<div class="tcd-card-title text-center">
						<h2 class="tcd-card-title-text">Bài bị hủy</h2>
					</div>
					<div class="tcd-card-body text-center" style="background-color: #00BCD4;">
						<i class="material-icons md-dark pmd-sm">delete_sweep</i>
						<h2 class="tcd-card-body-text"><?php echo $baibihuy; ?></h2>
					</div>
				</div>
			</a>
		 </div>

		 <!-- Propeller Marketplace-->
		 <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" data-toggle="tooltip" data-placement="bottom" title="Tổng số lượt xem của các bài viết được đăng trên website">
			<div class="card pmd-z-depth info-page">
				<div class="tcd-card-title text-center">
					<h2 class="tcd-card-title-text">Số lượt xem</h2>
				</div>
				<div class="tcd-card-body text-center" style="background-color: #E91E63;">
					<i class="material-icons md-dark pmd-sm" >visibility</i>
					<h2 class="tcd-card-body-text"><?php echo $soluotxem; ?></h2>
				</div>
			</div>
		 </div><!-- end Propeller Marketplace -->

		 <!-- Propeller Marketplace-->
		 <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3"  data-toggle="tooltip" data-placement="bottom" title="Tổng số lượt bình luận của các bài viết được đăng trên website">
			<div class="card pmd-z-depth info-page">
				<div class="tcd-card-title text-center">
					<h2 class="tcd-card-title-text">Số bình luận</h2>
				</div>
				<div class="tcd-card-body text-center" style="background-color: #3F51B5;">
					<i class="material-icons md-dark pmd-sm">comment</i>
					<h2 class="tcd-card-body-text"><?php echo $luotbinhluan; ?></h2>
				</div>
			</div>
		 </div>

		 <!-- Today's Site Activity -->
		 <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" data-toggle="tooltip" data-placement="bottom" title="Danh sách bài viết được Admin yêu cầu sửa lại">
			<div class="pmd-card pmd-z-depth">      
				<div class="table-responsive">
					<table id="example-checkbox" class="table pmd-table table-hover table-striped display responsive nowrap" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th></th>
							<th>Tên bài viết</th>
							<th>Nội dung yêu cầu sửa</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							foreach ($data_baiviet as $r) {
								if($r["trangthai_baiviet"] == 0 && $r["duyet_baiviet"] == 0 && $r["yeucau_baiviet"]!= "") {
								?>
									<tr>
										<td></td>
										<td><?php echo $r["name_baiviet"]; ?></td>
										<td class="col-md-5"><?php echo $r["yeucau_baiviet"]; ?></td>
									</tr>
								<?php
								}
							}
						?>
					</tbody>
				</table>
				</div>
			</div>
		 </div> <!--end Today's Site Activity -->
		 
		<!--project progress -->
	 	 <div class="col-lg-4 col-sm-6 col-xs-12">
			<div class="pmd-card pmd-z-depth project-progress">      
				 <div class="pmd-card-title">
					<div class="media-left set-svg">
						<span class="service-icon img-circle bg-fill-darkblue text-center">
							<i class="material-icons md-dark pmd-sm" style="color: #fff; line-height: 40px;">comment</i>
						</span>
					</div>
					<div class="media-body media-middle">
						<h2 class="pmd-card-title-text typo-fill-secondary">Bình luận gần đây</h2>
					</div>
				</div>
				<div class="content-section">
					<ul class="list-group pmd-card-list pmd-list todo-lists">
						<?php for ($i=0; $i < 5; $i++) {
						foreach ($data_baiviet as $row_baiviet) {
						 		if($data_binhluan[$i]["id_baiviet"] == $row_baiviet["id_baiviet"]) {
						 			?>
								<li class="list-group-item timeline project-info pmd-tooltip" data-toggle="tooltip" data-placement="left" title="Bài viết <?php echo $row_baiviet["name_baiviet"]; ?>"><?php echo $data_binhluan[$i]["noidung_binhluan"]; ?>
									<h5 class="typo-fill-secondary"><?php echo $data_binhluan[$i]["name_binhluan"]; ?> - <?php echo $data_binhluan[$i]["ngay_tao"]; ?></h5>
								</li>
							<?php
						 		}
						 } 
							
						} ?>
					</ul>
					<div class="blank-state-section hidden">	
						<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="70px" height="70px" viewBox="0 0 90 90" enable-background="new 0 0 90 90" xml:space="preserve">
							<g>
								<g>
									<g>
										<path fill="#CAC8C8" d="M61.364,73.637h-4.091H32.727h-4.091H6.982l9.381-9.381v-2.892V40.909
											c0-15.791,12.845-28.636,28.637-28.636c15.791,0,28.636,12.846,28.636,28.636v20.456v2.892l9.38,9.381H61.364z M45,85.909
											c-5.327,0-9.823-3.432-11.521-8.182h23.04C54.823,82.478,50.326,85.909,45,85.909L45,85.909z M89.404,74.234L77.729,62.563
											V40.909c0-16.613-12.551-30.408-28.638-32.441V4.09c0-2.258-1.832-4.091-4.09-4.091s-4.092,1.833-4.092,4.091v4.377
											C24.823,10.5,12.272,24.295,12.272,40.909v21.654L0.596,74.234c-0.581,0.589-0.757,1.465-0.442,2.229
											c0.315,0.767,1.064,1.265,1.89,1.265h27.168C31.041,84.772,37.382,90.001,45,90.001c7.618,0,13.958-5.229,15.788-12.273h27.168
											c0.825,0,1.575-0.498,1.89-1.265C90.161,75.699,89.985,74.823,89.404,74.234L89.404,74.234z"/>
									</g>
								</g>
								<line fill="#CAC8C8" stroke="#CAC8C8" stroke-width="3" stroke-miterlimit="10" x1="7.854" y1="7.834" x2="86.679" y2="86.659"/>
							</g>
						</svg>
						<h4>You Don't Have Any Notifications</h4>						
					</div>
				 </div>
				 <span class="btn-loader loader hidden">Loading...</span>
			</div>
	 	 </div><!-- end project progress -->	
 
		 <!--Recent Posts-->
		 <div class="col-lg-6 col-sm-6 col-xs-12">
			<div class="pmd-card pmd-z-depth recent-post">      
				<div class="pmd-card-title">
					<div class="media-left set-svg">
						<span class="service-icon img-circle bg-fill-red">
							<svg version="1.1" id="XMLID_1_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
								<path fill="#FFFFFF" d="M10,22h6L32,6l-6-6L10,16V22z M13,17L25,5l2,2L15,19h-2V17z M22,28H4V10h8l4-4H0v26h26V16l-4,4V28z"/>
							</svg>
						</span>
					</div>
					<div class="media-body media-middle">
						<h2 class="pmd-card-title-text typo-fill-secondary">Bài viết chưa gửi</h2>
					</div>
				</div>
				<ul class="list-group pmd-card-list pmd-list-avatar">
					<?php foreach ($data_baiviet as $row_chuagui) {
						if($row_chuagui["duyet_baiviet"] == 0 && $row_chuagui["trangthai_baiviet"] == 0 && $row_chuagui["yeucau_baiviet"] == "") {
							?>
								<li class="list-group-item">
									<div class="media-left"> 
										<a href="javascript:void(0);" class="avatar-list-img" title="profile-link"> 
											<img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../themes/images/user-icon.png" data-holder-rendered="true"> 
										</a> 
									</div>
									
										<div class="media-body media-middle">
											<a href="index.php?mod=baiviet&id=<?php echo $row_chuagui["id_baiviet"];?>">
												<h3 class="list-group-item-heading"><?php echo $row_chuagui["name_baiviet"]; ?></h3>
												<span class="list-group-item-text"><?php echo $row_chuagui["name_tacgia"]; ?></span>
											</a>
										</div>
										<div class="media-right post">
											<span class="post-time"><?php echo $row_chuagui["ngay_capnhat"]; ?></span>
										</div>

								</li>
							<?php
						}
					} ?>
				</ul>
				<span class="btn-loader loader hidden">Loading...</span>
			</div>
		 </div><!-- end Recent Posts-->	

		 <!--Recent Posts-->
		 <div class="col-lg-6 col-sm-6 col-xs-12">
			<div class="pmd-card pmd-z-depth recent-post">      
				<div class="pmd-card-title">
					<div class="media-left set-svg">
						<span class="service-icon img-circle bg-fill-red">
							<svg version="1.1" id="XMLID_1_" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="32px" height="32px" viewBox="0 0 32 32" enable-background="new 0 0 32 32" xml:space="preserve">
								<path fill="#FFFFFF" d="M10,22h6L32,6l-6-6L10,16V22z M13,17L25,5l2,2L15,19h-2V17z M22,28H4V10h8l4-4H0v26h26V16l-4,4V28z"/>
							</svg>
						</span>
					</div>
					<div class="media-body media-middle">
						<h2 class="pmd-card-title-text typo-fill-secondary">Bài viết đang được Admin xét duyệt</h2>
					</div>
				</div>
				<ul class="list-group pmd-card-list pmd-list-avatar">
					<?php foreach ($data_baiviet as $row_choduyet) {
						if($row_choduyet["duyet_baiviet"] == 0 && $row_choduyet["trangthai_baiviet"] == 1) {
							?>
								<li class="list-group-item">
									<div class="media-left"> 
										<a href="javascript:void(0);" class="avatar-list-img" title="profile-link"> 
											<img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../themes/images/user-icon.png" data-holder-rendered="true"> 
										</a> 
									</div>
									
										<div class="media-body media-middle">
											<a href="index.php?mod=baiviet&id=<?php echo $row_choduyet["id_baiviet"];?>">
												<h3 class="list-group-item-heading"><?php echo $row_choduyet["name_tacgia"]; ?></h3>
												<span class="list-group-item-text"><?php echo $row_choduyet["name_baiviet"]; ?></span>
											</a>
										</div>
										<div class="media-right post">
											<span class="post-time"><?php echo $row_choduyet["ngay_capnhat"]; ?></span>
										</div>

								</li>
							<?php
						}
					} ?>
				</ul>
				<span class="btn-loader loader hidden">Loading...</span>
			</div>
		 </div><!-- end Recent Posts-->	
		 
		 
	</div>
</div>

</div>