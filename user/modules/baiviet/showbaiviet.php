<?php
	$author = $user->getById($_SESSION["user_data"]["id_user"]); 
	$data = $post->getByAuthor($author["name_user"]);
	//print_r($data);
?>
<div class="content-block"> <!-- This is the target div. id must match the href of this div's tab -->

	<div class="col-xs-12 col-lg-12 table-responsive">
		<table class="table table-hover data-table">
			
			<thead class="table-boycoy">
				<tr>
					<th>#</th>
					<th>Tiêu đề bài viết</th>
					<th>Thao tác</th>
				</tr>
			</thead>
		 
			<tbody>
	    <?php 
	    $i = 1;
			foreach( $data as $r) {
			?>
				<tr>
					<td scope="row"><?php echo $i; ?></td>
					<td>
						<?php echo $r["name_baiviet"]; ?>
					</td>              
					<td>
						<!-- Icons -->
						 <a href="index.php?mod=baiviet&ac=edit&id=<?php echo $r["id_baiviet"];?>" title="Edit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a>&nbsp;&nbsp;
						 <a href="index.php?mod=baiviet&ac=delete&id=<?php echo $r["id_baiviet"];?>" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</a> 
						
					</td>
				</tr>
				<?php
				$i++;
			}
				?>
				
			</tbody>
			
		</table>
	</div>
</div> <!-- End #tab1 -->
