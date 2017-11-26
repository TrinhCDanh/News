<?php 
class Chitiet_duyetbai extends Db {

	public function getAll() {
		return $this->exeQuery("SELECT * FROM chitiet_duyetbai");
	}

	public function getByAdmin($id_admin) {
		$sql = "SELECT * FROM baiviet join chitiet_duyetbai 
						ON baiviet.id_baiviet = chitiet_duyetbai.id_baiviet 
						WHERE id_admin = :id_admin ORDER BY baiviet.id_baiviet DESC";
		$arr = array(":id_admin" => $id_admin);
		
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data;
		else return array();	
	}

	public function getById($id_baiviet) {
		$sql="SELECT * 
			FROM chitiet_duyetbai where id_baiviet=:id_baiviet ";
		$arr = array(":id_baiviet"=>$id_baiviet);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data[0];
		else return array();
	}

	public function requestEdit($id_admin, $id_baiviet) {
		$noidung_yeucau = Utils::postIndex("yeucau_baiviet");
		$ngay_tao = date("d-m-Y H:i:s");

		$sql="INSERT INTO chitiet_duyetbai(id_duyetbai, id_admin, id_baiviet, noidung_yeucau, ngay_tao) VALUES(NULL, :id_admin, :id_baiviet, :noidung_yeucau, :ngay_tao)";
		
		$arr = array(":id_admin"=>$id_admin, ":id_baiviet"=>$id_baiviet, ":noidung_yeucau"=>$noidung_yeucau, ":ngay_tao"=>$ngay_tao);

		return $this->exeNoneQuery($sql, $arr);	
	}

	public function delete($id) {
		$sql="DELETE FROM chitiet_duyetbai WHERE id_baiviet=:id ";
		$arr =  Array(":id"=>$id);
		return $this->exeNoneQuery($sql, $arr);	
	}
}

?>
