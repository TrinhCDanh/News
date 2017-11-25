<?php 
  $title = "Home Page";
  $admin = new Admin();
  $row = $admin->getById($_SESSION["admin_data"]["id_admin"]); 
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
				<div class="media-body media-middle"><?php echo $row["name_admin"]; ?></div>
				<div class="media-right media-middle"><i class="dic-more-vert dic"></i></div>
			</a>
			<ul class="dropdown-menu">
				<li><a href="index.php?mod=account">Tài khoản của tôi</a></li>
				<li><a href="index.php?mod=logout">Đăng xuât</a></li>
			</ul>
		</li><!-- End user info -->
		
		<li> 
			<a class="pmd-ripple-effect" href="index.php?mod=dashboard">	
				<i class="media-left media-middle"><svg version="1.1" x="0px" y="0px" width="19.83px" height="18px" viewBox="287.725 407.535 19.83 18" enable-background="new 287.725 407.535 19.83 18"
	 xml:space="preserve">
				<g>
					<path fill="#C9C8C8" d="M307.555,407.535h-9.108v10.264h9.108V407.535z M287.725,407.535v6.232h9.109v-6.232H287.725z
						 M296.834,415.271h-9.109v10.264h9.109V415.271z M307.555,419.303h-9.108v6.232h9.108V419.303z"/>
				</g>
				</svg></i>
				<span class="media-body">Dashboard</span>
			</a> 
		</li>

		<li> 
			<a class="pmd-ripple-effect" href="index.php?mod=theloai">	
				<i class="media-left media-middle"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
<g><path fill="#C9C8C8" d="M990,500c0-9.1-5.3-16.8-12.8-20.5l0.1-0.1l-144.9-70.7l144.9-70.7l-0.1-0.1c7.5-3.7,12.8-11.4,12.8-20.4c0-9.1-5.3-16.8-12.8-20.5l0.1-0.1l-467.8-228c-2.9-1.4-6.1-2.4-9.5-2.4c-3.4,0-6.6,0.9-9.5,2.4l-0.1-0.1L22.8,297c-7.5,3.7-12.8,11.4-12.8,20.4c0,9.1,5.3,16.8,12.8,20.5l-0.1,0.1l144.9,70.7L22.7,479.4l0.1,0.1C15.3,483.2,10,490.9,10,500c0,9.1,5.3,16.8,12.8,20.5l-0.1,0.1l144.9,70.7L22.7,661.9l0.1,0.1c-7.5,3.7-12.8,11.4-12.8,20.5c0,9.1,5.3,16.8,12.8,20.5l-0.1,0.1l467.8,228c2.9,1.4,6.1,2.4,9.5,2.4c3.4,0,6.6-0.9,9.5-2.4l0.1,0.1L977.2,703c7.5-3.7,12.8-11.4,12.8-20.5c0-9.1-5.3-16.8-12.8-20.4l0.1-0.1l-144.9-70.7l144.9-70.7l-0.1-0.1C984.7,516.8,990,509.1,990,500L990,500z M84.1,317.5L500,114.6l415.9,202.9L500,520.4L84.1,317.5L84.1,317.5z M915.9,682.5L500,885.4L84.1,682.5l135.3-66l271.1,132.1c2.9,1.4,6.1,2.4,9.5,2.4c3.4,0,6.6-0.9,9.5-2.4l0.1,0.1l271.1-132.2L915.9,682.5L915.9,682.5L915.9,682.5z M500,702.9L84.1,500l135.3-66l271.1,132.1c2.9,1.4,6.1,2.4,9.5,2.4c3.4,0,6.6-0.9,9.5-2.4l0.1,0.1L780.6,434l135.3,66L500,702.9L500,702.9z"/></g>
</svg></i>
				<span class="media-body">Thể loại</span>
			</a> 
		</li>

		<li> 
			<a class="pmd-ripple-effect" href="index.php?mod=loaitin">	
				<i class="media-left media-middle"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
<g><path fill="#C9C8C8" d="M523.8,974.7L871,624.9c0,0,31.4-26.8,31.4-65.3V344.4l-42.3,24.3v116c0,0,2.3,40-47.1,85.9c-45.3,44.6-345.5,347-345.5,347L523.8,974.7L523.8,974.7L523.8,974.7z M621.8,331.2c0,0,69.1-301.5,206.5-305.8c135.8-4.2,164.9,100,161.4,165.5c-4.1,78-80.7,136.6-129.6,145.7c0-39.3,0.2-55.2,0.2-55.2s80-21.6,80.3-92.3c0.2-54.7-29.9-125.7-112.3-116.6c-97.3,10.7-166.6,286-166.6,286l-14.5,14.6L621.8,331.2L621.8,331.2L621.8,331.2z M765.2,175h38.1v298.7c0.9,25.4-29,56.5-29,56.5L332.4,971L10,643.2c0,0,393-393.5,436.5-437.2c30.8-31,50.7-31,50.7-31h230.5L675,309.2l5.6,26c2.2,10.2,1.4,27.6,1.4,27.6c-5.4,22.4-25.4,39-49.3,39c-28,0-51.9-24.1-51.9-52.2c0-14.4,15.9-44.1,40.2-49.1l14.9-49.1c-65.2,13.4-99.8,55.3-99.8,99.4c0,54.1,43.6,98,97.4,98c53.8,0,97.4-43.9,97.4-98c-1.2-19.2-3-22.9-9.4-42.7c-5.3-17.5,26.2-93.1,26.2-93.1L765.2,175L765.2,175z"/></g>
</svg></i>
				<span class="media-body">Loại tin</span>
			</a> 
		</li>
		
		<li class="dropdown pmd-dropdown"> 
			<a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" href="javascript:void(0);">	
				<i class="media-left media-middle"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1000 1000" enable-background="new 0 0 1000 1000" xml:space="preserve">
<g><path fill="#C9C8C8" d="M566.2,305.1L509,364.7l-51.6,53.6c-15.5,16.3-58.9,60.3-69.3,71.3c-10.4,11-17,18.1-19.8,20.9c-6.6,6.9-11.7,13.2-15.2,18.8c-3.6,5.6-6.7,11.8-9.5,18.6c-2.3,4.4-5.4,12.5-9.1,24.2c-3.8,11.8-7.7,24.7-11.7,38.6c-4,13.9-7.8,27.5-11.2,40.6c-3.7,13-5.9,22.9-6.8,29.8c-1.9,12.8-0.7,21.9,3.6,27.2c4.2,5.5,12.7,7.3,25.4,5.9c6.2-1,15.5-3.1,27.9-6.5c12.5-3.5,25.8-7.4,39.6-12.1c13.8-4.7,27.2-9.4,40-14.3c12.8-4.9,22.4-9.1,28.9-12.5c6.6-3,13-6.9,19.1-11.7c6.1-5,11.5-9.6,16.2-14c1.9-1.5,7.8-7.4,17.7-17.8c9.9-10.2,22.4-23.4,37.5-39.3c15-16,62.5-64,81.3-83.1l56.5-59.6l147.5-156L712.7,152.5L566.2,305.1L566.2,305.1L566.2,305.1z M890.2,389.9V610v137.2v-0.9v29.1c0,75.3-61.4,136.6-136.7,136.6H588.2h-0.1H412.1l0,0H246.7c-75.3,0-136.6-61.3-136.6-136.6v-30.7v-0.3V390V250.8v2v-28.3c0-75.3,61.3-136.6,136.6-136.6h165.4h99.9h45.7H581l92.5-77.9h-30.6V10H246.7C131.8,10,37.7,100.7,32.3,214.2h-0.3v10.4v1.8l0,0v549.1v10.3h0.2C37.7,899.3,131.8,990,246.6,990h3.9h499.2h3.8c114.8,0,208.9-90.7,214.3-204.2h0.2v-10.3V313.3L890.2,389.9L890.2,389.9L890.2,389.9z M871.5,40.8c-5.1-1-10-1.4-14.6-1.3h2C863.3,39.7,867.4,40.1,871.5,40.8L871.5,40.8L871.5,40.8z M955.8,140.2c0.6-13.7-3-28.9-10.7-43.3c-5.3-9.9-12.4-19.3-21.2-28c-15.8-15.3-34.5-24.9-52.4-28.1c-4.1-0.8-8.3-1.2-12.6-1.3h-2c-7.9-0.1-16,1.2-24,3.7c-8.6,2.7-17.3,7.5-25.6,14.1c-6.3,5.6-14.4,13-24,22.5c-9.8,9.4-18.2,17.6-25.2,24.3l132.5,134.7c4.1-3.7,8.6-7.9,13.4-12.8c3.9-4.3,8.8-9.1,14.4-14.7c5.7-5.5,11.8-11.9,18.7-19.2c6.5-7.3,11.2-15,14.2-22.9c3-8,4.3-16,4.3-23.9C955.8,143.7,955.8,142,955.8,140.2L955.8,140.2L955.8,140.2z"/></g>
</svg></i>
				<span class="media-body">Bài viết</span>
				<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
			</a> 
			<ul class="dropdown-menu">
				<li><a href="index.php?mod=baiviet&ac=showchuaduyet">Chưa duyệt</a></li>
				<li><a href="index.php?mod=baiviet&ac=showdaduyet">Đã duyệt</a></li>
				<!--<li><a href="index.php?mod=baiviet&ac=addNew">Thêm</a></li>-->
			</ul>
		</li>

		<li class="dropdown pmd-dropdown"> 
			<a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" href="javascript:void(0);">	
				<i class="media-left media-middle"><svg version="1.1" x="0px" y="0px" width="18px" height="18.001px" viewBox="0 0 18 18.001" enable-background="new 0 0 18 18.001" xml:space="preserve">
<path fill="#C9C8C8" d="M6.188,0.001C5.232,0.001,4.5,0.732,4.5,1.688c0,0.394,0.166,0.739,0.334,1.02L5.45,3.71
	c0.113,0.113,0.176,0.341,0.176,0.51v0.281c0,0.619-0.506,1.125-1.125,1.125H0.282c-0.169,0-0.281,0.112-0.281,0.281V17.72
	c0,0.168,0.112,0.281,0.281,0.281h4.219c0.619,0,1.125-0.506,1.125-1.125v-0.281c0-0.168-0.063-0.397-0.176-0.509
	c0,0-0.615-0.946-0.615-1.002C4.666,14.802,4.5,14.457,4.5,14.063c0-0.956,0.731-1.688,1.688-1.688s1.688,0.731,1.688,1.688
	c0,0.394-0.166,0.739-0.334,1.02l-0.616,1.002c-0.056,0.112-0.176,0.341-0.176,0.509v0.281c0,0.619,0.506,1.125,1.125,1.125h4.219
	c0.168,0,0.281-0.113,0.281-0.281V13.5c0-0.619,0.506-1.125,1.125-1.125h0.281c0.169,0,0.396,0.063,0.51,0.176
	c0,0,0.945,0.616,1.002,0.616c0.337,0.168,0.626,0.334,1.02,0.334c0.956,0,1.687-0.731,1.687-1.687c0-0.957-0.731-1.688-1.687-1.688
	c-0.394,0-0.738,0.166-1.02,0.334l-1.002,0.616c-0.113,0.056-0.341,0.176-0.51,0.176H13.5c-0.619,0-1.125-0.506-1.125-1.125V5.908
	c0-0.168-0.113-0.281-0.281-0.281H7.875c-0.619,0-1.125-0.506-1.125-1.125V4.221c0-0.168,0.063-0.397,0.176-0.51
	c0,0,0.616-0.945,0.616-1.001c0.168-0.281,0.334-0.626,0.334-1.02C7.875,0.733,7.144,0.002,6.188,0.001L6.188,0.001z"/>
</svg></i> 
				<span class="media-body">UI Elements</span>
				<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
			</a> 
			<ul class="dropdown-menu">
				<li><a href="typography.html">Typography</a></li>
				<li><a href="icons.html">Icons</a></li>
				<li><a href="shadow.html">Shadow</a></li>
				<li><a href="accordion.html">Accordion</a></li>
				<li><a href="alert.html">Alert</a></li>
				<li><a href="badge.html">Badge</a></li>
				<li><a href="button.html">Button</a></li>
				<li><a href="modal.html">Modal</a></li>
				<li><a href="dropdown.html">Dropdown</a></li>
				<li><a href="list.html">List</a></li>
				<li><a href="navbar.html">Navbar</a></li>
				<li><a href="popover.html">Popover</a></li>
				<li><a href="progressbar.html">Progressbar</a></li>
				<!--<li><a href="sidebar.html">Sidebar</a></li> -->
				<li><a href="tab.html">Tab</a></li>
				<li><a href="tooltip.html">Tooltip</a></li>
				<li><a href="card.html">Card</a></li>
				<li><a href="floating-button.html">Floating Action Button</a></li>
			</ul>
		</li>
		<li class="dropdown pmd-dropdown"> 
			<a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" href="javascript:void(0);">	
				<i class="material-icons media-left pmd-sm">swap_calls</i> 
				<span class="media-body">Third Party Elements</span>
				<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
			</a> 
			<ul class="dropdown-menu">
				<li><a href="custom-scroll.html">Custom Scrollbar</a></li>
				<li><a href="datetimepicker.html">Datetimepicker</a></li>
				<li><a href="range-slider.html">Range Slider</a></li>
				<li><a href="select2.html">Select2</a></li>
			</ul>
		</li>
		
		<li class="dropdown pmd-dropdown"> 
			<a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" href="javascript:void(0);">	
				<i class="media-left media-middle"><svg version="1.1" x="0px" y="0px" width="14.187px" height="18px" viewBox="0 0 14.187 18" enable-background="new 0 0 14.187 18" xml:space="preserve">
<path fill="#C9C8C8" d="M0,0v18h14.187V0H0z M3.121,3.293h2.023v4.767H3.121V3.293z M11.211,14.764H2.948v-2.022h8.263V14.764
	L11.211,14.764z M11.211,11.585H2.948V9.563h8.263V11.585L11.211,11.585z M11.211,8.407H7.455V6.385h3.756V8.407z M11.211,5.229
	H7.455V3.207h3.756V5.229z"/>
</svg></i>
				<span class="media-body">Form</span>
				<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
			</a> 
			<ul class="dropdown-menu">
				<li><a href="form-element.html">Form Elements</a></li>
				<li><a href="form.html">Form Examples</a></li>
			</ul>
		</li>
		<li class="dropdown pmd-dropdown"> 
			<a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" href="javascript:void(0);">	
				<i class="media-left media-middle"><svg version="1.1" x="0px" y="0px" width="18px" height="12.706px" viewBox="0 0 18 12.706" enable-background="new 0 0 18 12.706" xml:space="preserve">
<path fill="#C9C8C8" d="M0,0v12.706h18V0H0z M12.706,4.235v3.176H9.108V4.235H12.706z M8.049,4.235v3.176h-6.99V4.235H8.049z
	 M1.059,8.47h6.99v3.177h-6.99V8.47z M9.108,11.647V8.47h3.599v3.177H9.108z M13.766,11.647V8.47h3.176v3.177H13.766z M16.942,7.412
	h-3.176V4.235h3.176V7.412L16.942,7.412z"/>
</svg></i> 
				<span class="media-body">Table</span>
				<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
			</a> 
			<ul class="dropdown-menu">
				<li><a href="table.html">Normal Table</a></li>
				<li><a href="data-table.html">Data Table</a></li>
				<li><a href="table-with-expand-collapse.html">Table with Expand/Collapse</a></li>
			</ul>
		</li>

		<li class="dropdown pmd-dropdown"> 
			<a aria-expanded="false" data-toggle="dropdown" class="btn-user dropdown-toggle media" data-sidebar="true" href="javascript:void(0);">	
				<i class="media-left media-middle">
				<svg x="0px" y="0px" width="18px" height="18px" viewBox="288.64 337.535 18 18" enable-background="new 288.64 337.535 18 18" xml:space="preserve">
					<title>022-layout view</title>
					<desc>Created with Sketch.</desc>
					<g>
						<g>
							<path fill="#C9C8C8" d="M298.765,353.285v-2.25h3.375v-3.375h2.25v5.625H298.765z M290.89,347.66h2.25v3.375h3.375v2.25h-5.625
								V347.66z M296.515,339.785v2.25h-3.375v3.375h-2.25v-5.625H296.515z M295.39,348.785h4.5v-4.5h-4.5V348.785z M304.39,345.41h-2.25
								v-3.375h-3.375v-2.25h5.625V345.41z M288.64,355.535h18v-18h-18V355.535z"/>
						</g>
					</g>
					<text transform="matrix(1 0 0 1 -0.0154 1202.2578)" font-family="'HelveticaNeue-Bold'" font-size="186.0251">Created by Richard Wearn</text>
					<text transform="matrix(1 0 0 1 -0.0154 1388.2891)" font-family="'HelveticaNeue-Bold'" font-size="186.0251">from the Noun Project</text>
				</svg></i> 
				<span class="media-body">Pages</span>
				<div class="media-right media-bottom"><i class="dic-more-vert dic"></i></div>
			</a> 
			<ul class="dropdown-menu">
				<li><a href="about.html">About</a></li>
				<li><a href="contact.html">Contact</a></li>
				<li><a href="404.html">404</a></li>
				<li><a href="blank.html">Blank</a></li>
				<li><a href="profile.html">Profile</a></li>
			</ul>
		</li>
		<li> 
			<a class="pmd-ripple-effect" href="login.html">	
				<i class="media-left media-middle">
				<svg version="1.1" id="Layer_1" x="0px" y="0px" width="18px" height="18px" viewBox="288.64 337.535 18 18" enable-background="new 288.64 337.535 18 18" xml:space="preserve">
				<path fill="#C9C8C8" d="M295.39,337.535v2.25h9v13.5h-9v2.25h11.25v-18H295.39z M297.64,342.035v3.375h-9v2.25h9v3.375l3.375-3.375
					l1.125-1.125l-1.125-1.125L297.64,342.035z"/>
				</svg></i> 
				<span class="media-body">Login</span>
			</a> 
		</li>
		<li> 
			<a class="pmd-ripple-effect" href="inbox.html">	
				<i class="media-left media-middle">
				<svg version="1.1" x="0px" y="0px" width="18px" height="12.479px" viewBox="288.64 363.118 18 12.479" enable-background="new 288.64 363.118 18 12.479" xml:space="preserve">
					<g transform="translate(641.29613,1096.2351)">
						<path fill="#C9C8C8" d="M-352.656-726.466v-5.828l4.484,4.484c2.467,2.466,4.499,4.484,4.516,4.484s2.049-2.018,4.516-4.484
							l4.484-4.484v5.828v5.828h-9h-9V-726.466z M-347.854-728.929l-4.188-4.188h8.385h8.386l-4.188,4.188
							c-2.304,2.303-4.192,4.188-4.198,4.188S-345.551-726.626-347.854-728.929z"/>
					</g>
				</svg></i> 
				<span class="media-body">Inbox</span>
			</a> 
		</li>
		<li> 
			<a class="pmd-ripple-effect" href="notifications.html">	
				<i class="media-left media-middle">
				<svg version="1.1" id="Layer_1" x="0px" y="0px" width="15.3px" height="18px" viewBox="289.99 337.535 15.3 18" enable-background="new 289.99 337.535 15.3 18" xml:space="preserve">
					<g>
						<g>
							<path fill="#C9C8C8" d="M297.64,355.535c0.99,0,1.8-0.81,1.8-1.8h-3.6C295.84,354.725,296.65,355.535,297.64,355.535z
								 M303.49,350.135v-4.95c0-2.79-1.891-5.041-4.501-5.67v-0.63c0-0.72-0.63-1.35-1.35-1.35c-0.72,0-1.35,0.63-1.35,1.35v0.63
								c-2.61,0.629-4.5,2.88-4.5,5.67v4.95l-1.8,1.8v0.9h15.3v-0.9L303.49,350.135z"/>
						</g>
					</g>
				</svg></i> 
				<span class="media-body">Notifications</span>
			</a> 
		</li>
		
	</ul>
</aside><!-- End Left sidebar -->