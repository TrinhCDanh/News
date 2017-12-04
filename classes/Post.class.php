<?php
class Post extends Db {
	
	/*Back-end*/
	public function getAll() {
		return $this->exeQuery("SELECT * FROM baiviet ORDER BY baiviet.id_baiviet DESC");
	}

	public function getById($id_baiviet) {
		$sql="SELECT * FROM baiviet JOIN loaitin ON baiviet.id_loaitin = loaitin.id_loaitin JOIN theloai on loaitin.id_theloai = theloai.id_theloai where id_baiviet=:id_baiviet ";
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

		if($trangthai_baiviet == 1) {
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
		}
		else {
			$sql="
			UPDATE baiviet 
			SET name_baiviet=:name_baiviet,
			tomtat_baiviet=:tomtat_baiviet,
			anh_baiviet=:anh_baiviet,
			noidung_baiviet=:noidung_baiviet,
			trangthai_baiviet=:trangthai_baiviet,
			id_loaitin=:id_loaitin,
			ngay_capnhat=:ngay_capnhat 
			WHERE id_baiviet=:id_baiviet";
		
			$arr = array(":id_baiviet"=>$id_baiviet, ":name_baiviet"=>$name_baiviet, ":tomtat_baiviet"=>$tomtat_baiviet, ":anh_baiviet"=>$anh_baiviet, ":noidung_baiviet"=>$noidung_baiviet, ":trangthai_baiviet"=>$trangthai_baiviet, ":id_loaitin"=>$id_loaitin, ":ngay_capnhat"=>$ngay_capnhat);
		}		
		return $this->exeNoneQuery($sql, $arr);	
	}

	//User gửi bài cho Admin
	public function sendBaiviet($id_baiviet) {
		$sql="
			UPDATE baiviet 
			SET trangthai_baiviet = 1, 
			yeucau_baiviet = NULL
			WHERE id_baiviet=:id_baiviet";
		$arr = array(":id_baiviet"=>$id_baiviet);
		return $this->exeNoneQuery($sql, $arr);	
	}

	//Admin yêu cầu User sửa bài viết
	public function requestEdit($id_baiviet) {
		$yeucau_baiviet = Utils::postIndex("yeucau_baiviet");
		
		$sql="
			UPDATE baiviet 
			SET trangthai_baiviet = 0, 
			yeucau_baiviet = :yeucau_baiviet,
			duyet_baiviet = 0 
			WHERE id_baiviet=:id_baiviet";
		
		$arr = array(":id_baiviet"=>$id_baiviet, ":yeucau_baiviet"=>$yeucau_baiviet);

		return $this->exeNoneQuery($sql, $arr);	
	}

	public function delete($id) {
		$sql="DELETE FROM baiviet WHERE id_baiviet=:id";
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

	//Chức năng tìm kiếm tạm thời
	public function searchBaiviet($keyword) {
		$sql="SELECT * FROM baiviet
				WHERE name_baiviet LIKE :keyword AND trangthai_baiviet = 1";
		$arr = array(":keyword"=>"%". $keyword ."%");
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data;
		else return array();
	}

	//Hiện bài viết theo thể loại
	public function getBaivietbyTheloai($id_theloai, $so_baiviet = 4) {
		$sql="SELECT * FROM baiviet JOIN loaitin ON baiviet.id_loaitin = loaitin.id_loaitin JOIN theloai on loaitin.id_theloai = theloai.id_theloai WHERE theloai.id_theloai =:id_theloai AND duyet_baiviet=1 ORDER BY baiviet.id_baiviet DESC LIMIT $so_baiviet";
		$arr= array(":id_theloai" => $id_theloai);

		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data;
		else return array();
	}
	//Hiển thị bài viết theo loại tin
	public function getBaivietbyLoaitin($id_loaitin, $so_baiviet = 4) {
		$sql="SELECT * FROM baiviet JOIN loaitin ON baiviet.id_loaitin = loaitin.id_loaitin WHERE loaitin.id_loaitin =:id_loaitin AND duyet_baiviet=1 ORDER BY baiviet.id_baiviet DESC LIMIT $so_baiviet";
		$arr= array(":id_loaitin" => $id_loaitin);

		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data;
		else return array();
	}

	//Hủy bài viết 
	public function huyBaiviet($id_baiviet) {
		$sql = "UPDATE baiviet SET duyet_baiviet=2, trangthai_baiviet=0 WHERE id_baiviet=:id_baiviet";
		$arr = array(':id_baiviet' => $id_baiviet);

		return $this->exeNoneQuery($sql, $arr);
	}

	//Hiện bài viết ngẫu nhiên
	public function RandomBaiviet() {
		return $this->exeQuery("SELECT * FROM baiviet WHERE duyet_baiviet=1 ORDER BY rand() LIMIT 6");
	}

	//Hiện bài viết xem nhiều nhất
	public function MostViewBaiviet() {
		return $this->exeQuery("SELECT * FROM baiviet WHERE duyet_baiviet=1 ORDER BY luotxem_baiviet DESC LIMIT 5");
	}

	public function MostViewTheloai($id_theloai) {
		$sql="SELECT * FROM baiviet JOIN loaitin ON baiviet.id_loaitin = loaitin.id_loaitin JOIN theloai on loaitin.id_theloai = theloai.id_theloai WHERE theloai.id_theloai=:id_theloai AND duyet_baiviet=1 ORDER BY luotxem_baiviet DESC LIMIT 5";
		$arr= array(":id_theloai" => $id_theloai);

		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data;
		else return array();
	}

	public function MostViewLoaitin($id_loaitin) {
		$sql="SELECT * FROM baiviet JOIN loaitin ON baiviet.id_loaitin = loaitin.id_loaitin WHERE loaitin.id_loaitin=:id_loaitin AND duyet_baiviet=1 ORDER BY luotxem_baiviet DESC LIMIT 5";
		$arr= array(":id_loaitin" => $id_loaitin);

		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data;
		else return array();
	}

	//Hiển thị bài viết nổi bật
	public function baivietNoibat() {
		return $this->exeQuery("SELECT *, COUNT(*) as luot_binhluan FROM baiviet JOIN binhluan on binhluan.id_baiviet = baiviet.id_baiviet GROUP BY baiviet.id_baiviet DESC LIMIT 5");
	}

	//Tăng sồ lượt xem
	public function viewCount($id_baiviet) {
		$sql = "UPDATE baiviet SET luotxem_baiviet=luotxem_baiviet+1 WHERE id_baiviet=:id_baiviet";
		$arr = array(':id_baiviet' => $id_baiviet);

		return $this->exeNoneQuery($sql, $arr);
	}

	//Đếm số bài viết của từng user
	public function countBaivietbyUser() {
		return $this->exeQuery("SELECT name_user, COUNT(id_baiviet) as sobaiviet FROM user left JOIN baiviet on user.name_user = baiviet.name_tacgia GROUP BY name_user ORDER BY sobaiviet DESC");
	}

	//Đếm số bài viết của từng loại tin 
	public function countBaivietbyLoaitin() {
		return $this->exeQuery("SELECT name_loaitin, COUNT(id_baiviet) as sobaiviet FROM baiviet JOIN loaitin ON baiviet.id_loaitin = loaitin.id_loaitin WHERE duyet_baiviet=1 GROUP BY name_loaitin");
	}

	//Duyệt và đăng bài viết lên trang chủ sồ lượt xem
	public function postBaiviet($id_baiviet) {
		$duyet_baiviet = Utils::postIndex("duyet_baiviet");
		$ngay_capnhat = date("d-m-Y H:i:s");
		$sql = "UPDATE baiviet SET duyet_baiviet=:duyet_baiviet, ngay_capnhat=:ngay_capnhat WHERE id_baiviet=:id_baiviet";
		$arr = array(':id_baiviet' => $id_baiviet, ":ngay_capnhat"=>$ngay_capnhat, ":duyet_baiviet"=>$duyet_baiviet);
		return $this->exeNoneQuery($sql, $arr);
	}
}

?>