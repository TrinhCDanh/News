<?php
class Post extends Db {
	
	/*Back-end*/
	public function getAll() {
		return $this->exeQuery("SELECT * FROM baiviet ORDER BY id_baiviet DESC");
	}

	public function getById($id_baiviet) {
		$sql="SELECT * 
			FROM baiviet where id_baiviet=:id_baiviet ";
		$arr = array(":id_baiviet"=>$id_baiviet);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data[0];
		else return array();
	}

	public function getByAuthor($name_tacgia) {
		$sql = "SELECT * FROM baiviet WHERE name_tacgia = :name_tacgia ORDER BY id_baiviet DESC";
		$arr = array(":name_tacgia" => $name_tacgia);
		
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data;
		else return array();	
	}

	public function saveAddNew($name_tacgia, $duyet_baiviet = 0) {
		$name_baiviet = postIndex("name_baiviet", "");
		$tomtat_baiviet = postIndex("tomtat_baiviet", "");
		$anh_baiviet = $_FILES["anh_baiviet"]["name"];
		$noidung_baiviet = stripslashes(postIndex("noidung_baiviet"));
		$trangthai_baiviet = Utils::postIndex("trangthai_baiviet");
		$id_loaitin = Utils::postIndex("id_loaitin", "");
		$ngay_tao = $ngay_capnhat = date("d-m-Y H:i:s");
		
		$sql="
			INSERT INTO baiviet (
				id_baiviet, 
				name_baiviet, 
				name_tacgia,
				tomtat_baiviet,
				anh_baiviet,
				noidung_baiviet,
				luotxem_baiviet,
				trangthai_baiviet,
				yeucau_baiviet,
				duyet_baiviet,
				id_loaitin,
				ngay_tao,
				ngay_capnhat 
			) VALUES (NULL, :name_baiviet, :name_tacgia, :tomtat_baiviet, :anh_baiviet, :noidung_baiviet, 0, :trangthai_baiviet, NULL, :duyet_baiviet, :id_loaitin, :ngay_tao, :ngay_capnhat) ";

		$arr = array(":name_baiviet"=>$name_baiviet, ":name_tacgia"=>$name_tacgia, ":tomtat_baiviet"=>$tomtat_baiviet, ":anh_baiviet"=>$anh_baiviet, ":noidung_baiviet"=>$noidung_baiviet,  ":trangthai_baiviet"=>$trangthai_baiviet, ":duyet_baiviet"=>$duyet_baiviet, ":id_loaitin"=>$id_loaitin, ":ngay_tao"=>$ngay_tao, ":ngay_capnhat"=>$ngay_capnhat);
		
		return $this->exeNoneQuery($sql, $arr);
	}

	public function saveEdit($id_baiviet, $anh_baiviet) {
		$name_baiviet = postIndex("name_baiviet", "");
		$tomtat_baiviet = postIndex("tomtat_baiviet", "");
		$noidung_baiviet = stripslashes(postIndex("noidung_baiviet"));
		$id_loaitin = Utils::postIndex("id_loaitin", "");
		$ngay_capnhat = date("d-m-Y H:i:s");
		$duyet_baiviet = Utils::postIndex("duyet_baiviet", "");
		
		$sql="
			UPDATE baiviet 
			SET name_baiviet=:name_baiviet,
			tomtat_baiviet=:tomtat_baiviet,
			anh_baiviet=:anh_baiviet,
			noidung_baiviet=:noidung_baiviet, 
			duyet_baiviet=:duyet_baiviet,
			id_loaitin=:id_loaitin,
			ngay_capnhat=:ngay_capnhat 
			WHERE id_baiviet=:id_baiviet";
		
		$arr = array(":id_baiviet"=>$id_baiviet, ":name_baiviet"=>$name_baiviet, ":tomtat_baiviet"=>$tomtat_baiviet, ":anh_baiviet"=>$anh_baiviet, ":noidung_baiviet"=>$noidung_baiviet, ":duyet_baiviet"=>$duyet_baiviet, ":id_loaitin"=>$id_loaitin, ":ngay_capnhat"=>$ngay_capnhat);

		return $this->exeNoneQuery($sql, $arr);	
	}

	public function saveEditUser($id_baiviet, $anh_baiviet) {
		$name_baiviet = postIndex("name_baiviet", "");
		$tomtat_baiviet = postIndex("tomtat_baiviet", "");
		$noidung_baiviet = stripslashes(postIndex("noidung_baiviet"));
		$trangthai_baiviet = Utils::postIndex("trangthai_baiviet");
		$id_loaitin = Utils::postIndex("id_loaitin", "");
		$ngay_capnhat = date("d-m-Y H:i:s");
		
		$sql="
			UPDATE baiviet 
			SET name_baiviet=:name_baiviet,
			tomtat_baiviet=:tomtat_baiviet,
			anh_baiviet=:anh_baiviet,
			noidung_baiviet=:noidung_baiviet,
			trangthai_baiviet=:trangthai_baiviet,
			yeucau_baiviet=NULL, 
			id_loaitin=:id_loaitin,
			ngay_capnhat=:ngay_capnhat 
			WHERE id_baiviet=:id_baiviet";
		
		$arr = array(":id_baiviet"=>$id_baiviet, ":name_baiviet"=>$name_baiviet, ":tomtat_baiviet"=>$tomtat_baiviet, ":anh_baiviet"=>$anh_baiviet, ":noidung_baiviet"=>$noidung_baiviet, ":trangthai_baiviet"=>$trangthai_baiviet, ":id_loaitin"=>$id_loaitin, ":ngay_capnhat"=>$ngay_capnhat);

		return $this->exeNoneQuery($sql, $arr);	
	}

	//Yêu cầu tác giả bài viết sửa
	public function requestEdit($id_baiviet) {
		$yeucau_baiviet = Utils::postIndex("yeucau_baiviet");
		
		$sql="
			UPDATE baiviet 
			SET trangthai_baiviet = 0, 
			yeucau_baiviet = :yeucau_baiviet 
			WHERE id_baiviet=:id_baiviet";
		
		$arr = array(":id_baiviet"=>$id_baiviet, ":yeucau_baiviet"=>$yeucau_baiviet);

		return $this->exeNoneQuery($sql, $arr);	
	}

	public function delete($id) {
		$sql="DELETE FROM baiviet WHERE id_baiviet=:id ";
		$arr =  Array(":id"=>$id);
		return $this->exeNoneQuery($sql, $arr);	
	}
	
	public function updateAuthor($old_name_tacgia) {
		$admin = Utils::postIndex("name_admin", "");
		if($admin != "") 
			$new_name_tacgia = $admin;
		else
			$new_name_tacgia = Utils::postIndex("name_user", "");

		$sql = "UPDATE baiviet SET name_tacgia=:new_name_tacgia WHERE name_tacgia=:old_name_tacgia";
		$arr = array(':new_name_tacgia' => $new_name_tacgia, ":old_name_tacgia" => $old_name_tacgia);

		return $this->exeNoneQuery($sql, $arr);
	}

}
?>