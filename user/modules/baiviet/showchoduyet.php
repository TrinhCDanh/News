<?php
	$author = $user->getById($_SESSION["user_data"]["id_user"]); 
	$data = $post->getByAuthor($author["name_user"]);
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
				<th>Tiêu đề bài viết</th>
				<th>Loại tin</th>
				<th>Tác giả</th>
				<th>Thao tác</th>
			</tr>
		</thead>
		<tbody>
			<?php  
				foreach ($data as $r) {
					if($r["trangthai_baiviet"] == 1 && $r["duyet_baiviet"] == 0) {
						?>
							<tr <?php if($r["yeucau_baiviet"]!="") echo "class='table-danger'"?>>
								<td></td>
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
								<td><?php echo $r["name_tacgia"]; ?></td>
								<td class="pmd-table-row-action">
									<a href="index.php?mod=baiviet&id=<?php echo $r["id_baiviet"];?>" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
										<i class="material-icons md-dark pmd-sm">remove_red_eye</i>
									</a>					
								</td>
							</tr>
						<?php
					}
				}
			?>
			

		</tbody>
	</table>
		</div>
	</div>

</div>
			</div> 
