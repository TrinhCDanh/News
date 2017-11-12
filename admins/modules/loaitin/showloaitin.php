<?php
	$data = $loaitin->getAll();
?>
<div class="col-md-9">
<div class="component-box">
	<!-- table card example -->
	<div  class="pmd-card pmd-z-depth pmd-card-custom-view">
		<div class="table-responsive">
		<table id="example-checkbox" class="table pmd-table table-hover table-striped display responsive nowrap" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th></th>
				<th>Tên thể loại</th>
				<th>Thuộc thể loại</th>
				<th>Thao tác</th>
			</tr>
		</thead>
		<tbody>
			<?php  
				foreach ($data as $r) {
					?>
						<tr>
							<td></td>
							<td><?php echo $r["name_loaitin"]; ?></td>
							<td>
								<?php 
									$theloai = new Theloai();
			          	$getAll = $theloai->getAll();
			          	foreach($getAll as $rw)
			          		if($rw["id_theloai"] == $r["id_theloai"]) 
											echo $rw["name_theloai"]; 
								?>	
							</td>
							<td class="pmd-table-row-action">
								<a href="index.php?mod=loaitin&id=<?php echo $r["id_loaitin"];?>" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
									<i class="material-icons md-dark pmd-sm">edit</i>
								</a>
								<a href="index.php?mod=loaitin&ac=delete&id=<?php echo $r["id_loaitin"];?>" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">
									<i class="material-icons md-dark pmd-sm">delete</i>
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