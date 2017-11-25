<?php 
class Chitiet_suabai extends Db {

	public function addEdit($id_user, $id_baiviet, $anh_baiviet, $yeucau_baiviet) {
		$name_baiviet = postIndex("name_baiviet", "");
		$tomtat_baiviet = postIndex("tomtat_baiviet", "");
		$noidung_baiviet = stripslashes(postIndex("noidung_baiviet"));
		$id_loaitin = Utils::postIndex("id_loaitin", "");
		$ngay_capnhat = date("d-m-Y H:i:s");

		$sql="INSERT INTO chitiet_suabai(id_user, id_baiviet, name_baiviet, tomtat_baiviet, anh_baiviet, noidung_baiviet, yeucau_baiviet, id_loaitin, ngay_capnhat) VALUES(:id_user, :id_baiviet, :name_baiviet, :tomtat_baiviet, :anh_baiviet, :noidung_baiviet, :yeucau_baiviet, :id_loaitin, :ngay_capnhat)";
		
		$arr = array(":id_user"=>$id_user, ":id_baiviet"=>$id_baiviet, ":name_baiviet"=>$name_baiviet, ":tomtat_baiviet"=>$tomtat_baiviet, ":anh_baiviet"=>$anh_baiviet, ":noidung_baiviet"=>$noidung_baiviet, ":yeucau_baiviet"=>$yeucau_baiviet, ":id_loaitin"=>$id_loaitin, ":ngay_capnhat"=>$ngay_capnhat);

		return $this->exeNoneQuery($sql, $arr);	
	}
}

?>
