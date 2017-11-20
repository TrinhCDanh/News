<?php
class Binhluan extends Db{
	
	public function getById($id_binhluan) {
		$sql="SELECT * 
			FROM binhluan where id_binhluan=:id_binhluan";
		$arr = array(":id_binhluan"=>$id_binhluan);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data[0];
		else return array();
	}

	public function getAllwithBaiviet($id_baiviet)
	{
		$sql="SELECT * 
			FROM binhluan JOIN user ON binhluan.id_user = user.id_user 
			WHERE binhluan.id_baiviet=:id_baiviet ";
		$arr = array(":id_baiviet"=>$id_baiviet);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data;
		else return array();
	}
	
	public function addBinhluan($id_baiviet, $id_user, $noidung_binhluan)
	{
		$ngay_tao = $ngay_capnhat = date("d-m-Y");
		$sql="INSERT INTO binhluan (id_binhluan, id_baiviet, id_user, noidung_binhluan, ngay_tao, ngay_capnhat) values (NULL,:id_baiviet, :id_user, :noidung_binhluan, :ngay_tao, :ngay_capnhat)";
		$arr = array(":id_baiviet"=>$id_baiviet, ":id_user"=>$id_user, ":noidung_binhluan"=>$noidung_binhluan, ":ngay_tao"=>$ngay_tao, ":ngay_capnhat"=>$ngay_capnhat);
		return $this->exeNoneQuery($sql, $arr);
	}

	public function delete($id_binhluan) {
		$sql="DELETE FROM binhluan WHERE id_binhluan=:id_binhluan ";
		$arr =  Array(":id_binhluan"=>$id_binhluan);
		return $this->exeNoneQuery($sql, $arr);	
	}
	
}