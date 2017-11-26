<?php  
	$id_baiviet = getIndex("id_baiviet", "");
	echo $id_baiviet;
	$chitietsuabai = new Chitiet_suabai();
	$baiviet = new Post();

	$data_chitietsuabai = $chitietsuabai->getByBaiviet($id_baiviet);
	$data_baiviet = $baiviet->getById($id_baiviet);
	print_r($data_chitietsuabai);

	if(!empty($data_chitietsuabai))
		include "modules/history/showhistoryedit.php";
	else
		include "modules/history/shownoidung.php";

?>