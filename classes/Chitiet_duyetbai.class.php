<?php 
class Chitiet_duyetbai extends Db {

	public function requestEdit($id_admin, $id_baiviet) {
		$noidung_yeucau = Utils::postIndex("yeucau_baiviet");
		$ngay_tao = date("d-m-Y H:i:s");

		$sql="INSERT INTO chitiet_duyetbai(id_admin, id_baiviet, noidung_yeucau, ngay_tao) VALUES(:id_admin, :id_baiviet, :noidung_yeucau, :ngay_tao)";
		
		$arr = array(":id_admin"=>$id_admin, ":id_baiviet"=>$id_baiviet, ":noidung_yeucau"=>$noidung_yeucau, ":ngay_tao"=>$ngay_tao);

		return $this->exeNoneQuery($sql, $arr);	
	}
}

?>
