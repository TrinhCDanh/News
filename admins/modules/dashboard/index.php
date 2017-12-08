<?php  
	$baiviet = new Post();
	$binhluan = new Binhluan();
	$chitiet_duyetbai = new Chitiet_duyetbai();

	$data_baiviet = $baiviet->getAll();
	$data_binhluan = $binhluan->getAll();
	$luotbinhluan = $binhluan->countBinhluan();
	$countBaivietbyUser = $baiviet->countBaivietbyUser();
	$countBaivietbyLoaitin = $baiviet->countBaivietbyLoaitin();

	$name_tacgia = $admin->getById($_SESSION["admin_data"]["id_admin"]); 
	$baichuaduyet = $baidadang = $soluotxem = 0;

	foreach ($data_baiviet as $row_baiviet) {
		if ($row_baiviet["trangthai_baiviet"] == 1) {
			if ($row_baiviet["duyet_baiviet"] == 1)
				$baidadang++;
			if ($row_baiviet["duyet_baiviet"] == 0)
				$baichuaduyet++;
		}
		$soluotxem += $row_baiviet["luotxem_baiviet"]; 
	}
?>

<div id="content" class="pmd-content content-area dashboard">

	<div class="container-fluid">
		<div class="row" id="card-masonry">
		 
		<!-- Propeller Marketplace-->
		 <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 pmd-tooltip" data-toggle="tooltip" data-placement="bottom" title="Các bài viết chưa được xem và duyệt">
		 	<a href="index.php?mod=baiviet&ac=showchuaduyet">
				<div class="card pmd-z-depth info-page">
					<div class="tcd-card-title text-center">
						<h2 class="tcd-card-title-text">Bài chưa duyệt</h2>
					</div>
					<div class="tcd-card-body text-center" style="background-color: #3F51B5;">
						<i class="material-icons md-dark pmd-sm">library_books</i>
						<h2 class="tcd-card-body-text"><?php echo $baichuaduyet; ?></h2>
					</div>
				</div>
			</a>
		 </div><!-- end Propeller Marketplace -->

		 <!-- Propeller Marketplace-->
		 <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3" data-toggle="tooltip" data-placement="bottom" title="Các bài viết đã được đăng lên trang chủ">
			<div class="card pmd-z-depth info-page">
				<div class="tcd-card-title text-center">
					<h2 class="tcd-card-title-text">Bài đã đăng</h2>
				</div>
				<div class="tcd-card-body text-center" style="background-color: #FFD600;">
					<i class="material-icons md-dark pmd-sm" style="color: #1f2f46;">history</i>
					<h2 class="tcd-card-body-text" style="color: #1f2f46;"><?php echo $baidadang; ?></h2>
				</div>
			</div>
		 </div><!-- end Propeller Marketplace -->

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
				<div class="tcd-card-body text-center" style="background-color: #00BCD4;">
					<i class="material-icons md-dark pmd-sm">comment</i>
					<h2 class="tcd-card-body-text"><?php echo $luotbinhluan[0]["luotbinhluan"]; ?></h2>
				</div>
			</div>
		 </div>
		 <!-- Today's Site Activity -->
		 <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
			<div class="pmd-card pmd-z-depth pmd-tooltip" data-toggle="tooltip" data-placement="top" title="Số bài viết của các tác giả hiện có trên hệ thống">      
				<div class="table-responsive">
					<table id="example-checkbox" class="table pmd-table table-hover table-striped display responsive nowrap" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th></th>
							<th>Tác giả</th>
							<th>Số bài viết</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$sothanhvien = $dacobai = $chuacobai = 0;  
							foreach ($countBaivietbyUser as $r) {
								?>
									<tr>
										<td></td>
										<td><?php echo $r["name_user"]; ?></td>
										<td><?php echo $r["sobaiviet"]; ?></td>
									</tr>
								<?php
								$sothanhvien++;
								if($r["sobaiviet"] == 0) $chuacobai++;
								else $dacobai++;
							}
						?>
					</tbody>
				</table>
				</div>
			</div>
		 </div> <!--end Today's Site Activity -->
		 
		 <!-- Propeller Marketplace-->
		 <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
			<div class="pmd-card pmd-z-depth advertising-info">
				<div class="pmd-card-title">
					<div class="media-left set-svg">
						<span class="service-icon img-circle bg-fill-red text-center">
							<i class="material-icons md-dark pmd-sm" style="color: #fff; line-height: 40px;">supervisor_account</i>
						</span>
					</div>
					<div class="media-body media-middle">
						<h2 class="pmd-card-title-text typo-fill-secondary">Thành viên</h2>
					</div>
				</div>
				<div class="pmd-card-body">
					<p>Vnnews hiện đang có <strong><?php echo $sothanhvien; ?></strong> thành viên. Trong đó có:</p>
					<p class="services-active">
						<span class="pmd-display2 media-middle activated-service"><?php echo $dacobai; ?></span>
						<span class="typo-fill-secondary source-semibold media-middle">Thành viên đã viết bài</span>
					</p>
					<p class="services-active">
						<span class="pmd-display2 media-middle activated-service"><?php echo $chuacobai; ?></span>
						<span class="typo-fill-secondary source-semibold media-middle">Thành viên chưa viết bài</span>
					</p>
					<!--<a href="../../../get-started/" type="button" class="btn pmd-ripple-effect btn-services bg-fill-primary-color" title="get-started">Get Started</a>-->
				</div>
			</div>
		 </div><!-- end Propeller Marketplace -->

		 <!--Browser Usage card-->
		 <div class="col-lg-4 col-sm-6 col-xs-12 value-added-service-card">
			<div class="pmd-card pmd-z-depth">     
				<div class="pmd-card-title">
					<div class="media-left set-svg">
						<span class="service-icon img-circle bg-fill-violet">
							<svg  x="0px" y="0px" width="32px" height="30px" viewBox="0 0 32 30" enable-background="new 0 0 32 30" xml:space="preserve">
								<g>
									<path fill="#FFFFFF" d="M16.413,3.584l2.832,6.83l0.594,1.431l1.546,0.105l7.196,0.491L23,17.036l-1.227,1.01l0.394,1.539
										l1.835,7.174l-6.187-3.846l-1.32-0.82l-1.32,0.82L8.99,26.758l1.834-7.173l0.394-1.539l-1.226-1.01l-5.579-4.595l7.194-0.491
										l1.583-0.108l0.577-1.477L16.413,3.584 M16.395-0.053c-0.708,0-1.416,0.404-1.72,1.213l-3.238,8.296l-8.902,0.607
										c-1.619,0.202-2.428,2.226-1.011,3.237l6.879,5.665l-2.225,8.701c-0.316,1.263,0.724,2.28,1.87,2.28
										c0.322,0,0.651-0.08,0.962-0.258l7.486-4.653l7.486,4.653c0.311,0.178,0.641,0.258,0.962,0.258c1.146,0,2.187-1.018,1.871-2.28
										l-2.226-8.701l6.88-5.665c1.416-1.012,0.606-3.036-1.012-3.237l-8.903-0.607l-3.439-8.296C17.811,0.352,17.103-0.053,16.395-0.053
										L16.395-0.053z"/>
								</g>
							</svg>
						</span>
					</div>
					<div class="media-body media-middle">
						<h2 class="pmd-card-title-text typo-fill-secondary">Bài viết theo loại tin</h2>
					</div>
				</div>
				<div class="pmd-card-body text-center value-added">
					<div class="row">
						<?php  
							foreach ($countBaivietbyLoaitin as $row_bvloaitin) {
								?>
									<div class="col-xs-6 value-added-section">
										<div class="source-semibold typo-fill-secondary title"><?php echo $row_bvloaitin["name_loaitin"] ?></div>
										<div class="pmd-display2"><a href="javascript:void(0)"><?php echo $row_bvloaitin["sobaiviet"] ?></a></div>
									</div>
								<?php
							}
						?>
					</div>
				</div>
				<span class="btn-loader loader hidden">Loading...</span>
			</div>
		 </div><!--end Browser Usage card-->
		 
		 
		 
		 <!--Recent Posts-->
		 <div class="col-lg-4 col-sm-6 col-xs-12">
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
						<h2 class="pmd-card-title-text typo-fill-secondary">Bài viết chưa đăng</h2>
					</div>
				</div>
				<ul class="list-group pmd-card-list pmd-list-avatar">
					<?php foreach ($data_baiviet as $row_chuaduyet) {
						$getId_duyetbai = $chitiet_duyetbai->getById($row_chuaduyet["id_baiviet"]);
						if($row_chuaduyet["duyet_baiviet"] == 0 && $row_chuaduyet["trangthai_baiviet"] == 1) {
							?>
								<li class="list-group-item pmd-tooltip" data-toggle="tooltip" data-placement="left" title="<?php if(!empty($getId_duyetbai) && $getId_duyetbai["id_admin"]!=$name_tacgia["id_admin"]) echo "Bài viết đang được duyệt bởi Admin khác" ?>">
									<div class="media-left"> 
										<a href="javascript:void(0);" class="avatar-list-img" title="profile-link"> 
											<img alt="40x40" data-src="holder.js/40x40" class="img-responsive" src="../themes/images/user-icon.png" data-holder-rendered="true"> 
										</a> 
									</div>
									
										<div class="media-body media-middle">
											<a href="index.php?mod=baiviet&id=<?php echo $row_chuaduyet["id_baiviet"];?>">
												<h3 class="list-group-item-heading"><?php echo $row_chuaduyet["name_tacgia"]; ?></h3>
												<span class="list-group-item-text"><?php echo $row_chuaduyet["name_baiviet"]; ?></span>
											</a>
										</div>
										<div class="media-right post">
											<span class="post-time"><?php echo $row_chuaduyet["ngay_capnhat"]; ?></span>
										</div>

								</li>
							<?php
						}
					} ?>
				</ul>
				<span class="btn-loader loader hidden">Loading...</span>
			</div>
		 </div><!-- end Recent Posts-->	
		 
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
						<?php for ($i=0; $i < 3; $i++) {
						foreach ($data_baiviet as $row_baiviet) {
						 		if($data_binhluan[$i]["id_baiviet"] == $row_baiviet["id_baiviet"]) { 
							?>
								<li class="list-group-item timeline project-info pmd-tooltip" data-toggle="tooltip" data-placement="left" title="Bài viết <?php echo $row_baiviet["name_baiviet"]; ?>"><?php echo $data_binhluan[$i]["noidung_binhluan"]; ?>
									<h5 class="typo-fill-secondary"><?php echo $data_binhluan[$i]["name_binhluan"]; ?> - <?php echo $data_binhluan[$i]["ngay_tao"]; ?></h5>
								</li>
							<?php
						}}
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
	</div>
</div>

</div>