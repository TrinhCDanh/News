<?php
	$author = $user->getById($_SESSION["user_data"]["id_user"]); 
	
?>
 
<div class="col-md-12 col-lg-12">
<div class="component-box">
	<!-- table card example -->
	<div  class="pmd-card pmd-z-depth pmd-card-custom-view">
		<div class="table-responsive">
		<table id="example-checkbox" class="table pmd-table table-hover table-striped display responsive nowrap" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th></th>
				<th>Lần sửa thứ</th>
				<th>Tiêu đề bài viết</th>
				<th>Loại tin</th>
				<th>Thao tác</th>
			</tr>
		</thead>
		<tbody>
			<?php
				$i=1;  
				foreach ($data_chitietsuabai as $r) {
					?>
						<tr>
							<td></td>
							<td><?php echo $i++; ?></td>
							<td class="col-md-6">
								<?php echo $r["name_baiviet"]; ?>
							</td>
							<td>
								<?php
			          	foreach($getAll as $rw)
			          		if($rw["id_loaitin"] == $r["id_loaitin"]) 
											echo $rw["name_loaitin"]; 
								?>	
							</td>
							<td class="pmd-table-row-action">
								<a href="index.php?mod=baiviet&ac=showsuabai&id_suabai=<?php echo $r["id_suabai"];?>" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
									<i class="material-icons md-dark pmd-sm">remove_red_eye</i>
								</a>					
							</td>
						</tr>
					<?php
					
				}
			?>
			

		</tbody>
	</table>
		</div>
	</div>

</div>
			</div> 
