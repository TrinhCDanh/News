<?php
class Binhluan extends Db{
	
	public function getAllwithBaiviet($id_baiviet)
	{
		$sql="SELECT * 
			FROM binhluan
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
	
}