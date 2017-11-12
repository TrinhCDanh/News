<?php
class Admin extends Db {
	/*Backend*/
	public function delete($id) {
		$sql="DELETE FROM admin WHERE id_admin=:id ";
		$arr =  Array(":id"=>$id);
		return $this->exeNoneQuery($sql, $arr);	
	}
	
	public function getById($id) {
		$sql="SELECT * 
			FROM admin
			WHERE  id_admin=:id ";
		$arr = array(":id"=>$id);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data[0];
		else return array();
	}
	
	public function getAll() {
		return $this->exeQuery("SELECT * FROM admin");
	}
	
	public function saveEdit($id) {
		$name_admin = Utils::postIndex("name_admin", "");
		$email_admin = Utils::postIndex("email_admin", "");
		$ngaysinh_admin = postIndex("ngaysinh_admin", "");
		$gioitinh_admin = Utils::postIndex("gioitinh_admin", "");
		$sdt_admin = Utils::postIndex("sdt_admin", "");
		$pass_admin = Utils::postIndex("pass2_admin", "");

		if ($name_admin == "" || $email_admin == "") return 0;

		if ($pass_admin == "") {
			$sql="UPDATE admin SET name_admin=:name_admin, email_admin=:email_admin, ngaysinh_admin=:ngaysinh_admin, gioitinh_admin=:gioitinh_admin, sdt_admin=:sdt_admin WHERE id_admin=:id";
			$arr = array(":id"=>$id, ":name_admin"=>$name_admin, ":email_admin"=>$email_admin, ":ngaysinh_admin"=>$ngaysinh_admin, "gioitinh_admin"=>$gioitinh_admin, ":sdt_admin"=>$sdt_admin);
		}
		else {
			$pass_admin = MD5(Utils::postIndex("pass2_admin", ""));
			$sql="UPDATE admin SET name_admin=:name_admin, email_admin=:email_admin, ngaysinh_admin=:ngaysinh_admin, gioitinh_admin=:gioitinh_admin, sdt_admin=:sdt_admin, pass_admin=:pass_admin WHERE id_admin=:id";
			$arr = array(":id"=>$id, ":name_admin"=>$name_admin, ":email_admin"=>$email_admin, ":ngaysinh_admin"=>$ngaysinh_admin, "gioitinh_admin"=>$gioitinh_admin, ":sdt_admin"=>$sdt_admin, ":pass_admin"=>$pass_admin);
		}
		
		return $this->exeNoneQuery($sql, $arr);	
	}

	public function saveAddNew() {
		$name_admin = Utils::postIndex("name_admin", "");
		$email_admin = Utils::postIndex("email_admin", "");
		$ngaysinh_admin = postIndex("ngaysinh_admin", "");
		$gioitinh_admin = Utils::postIndex("gioitinh_admin", "");
		$sdt_admin = Utils::postIndex("sdt_admin", "");
		$pass_admin = MD5(Utils::postIndex("pass2_admin", ""));
		$level_admin = Utils::postIndex("level_admin", "");

		if ($name_admin=="" || $pass_admin== "" || $email_admin=="") return 0;
		
		$sql="INSERT INTO admin(name_admin, email_admin, ngaysinh_admin, gioitinh_admin, sdt_admin, pass_admin, level_admin) values(:name_admin, :email_admin, :ngaysinh_admin, :gioitinh_admin, :sdt_admin, :pass_admin, :level_admin)";
		$arr = array(":name_admin"=>$name_admin, ":email_admin"=>$email_admin, ":ngaysinh_admin"=>$ngaysinh_admin, "gioitinh_admin"=>$gioitinh_admin, ":sdt_admin"=>$sdt_admin, ":pass_admin"=>$pass_admin, ":level_admin"=>$level_admin);

		return $this->exeNoneQuery($sql, $arr);
	}
	
	/*Font-end*/
	public function isadminNameExist($name_admin, $email_admin)
	{
		$sql="SELECT * FROM admin WHERE name_admin=:name_admin OR email_admin=:email_admin";
		$arr = array(":name_admin"=>$name_admin, ":email_admin"=>$email_admin);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return true;
		return false;
	}
	
	public function checkRegister($name_admin, $pass1_admin, $pass2_admin)
	{
		$err = "";
		if(!preg_match("/^[a-zA-Z ]*$/", convert_vi_to_en($name_admin)))
			$err .= "Tên không được chứa kí tự đặc biệt!";
		else if(strlen($name_admin) < 4) 
			$err .= "Tên không được ít hơn 4 kí tự";
		else if($pass2_admin != $pass1_admin) 
			$err .= "Xác nhận mật khẩu sai";
		return $err;
	}

	public function login($name_adminname, $pass_admin)
	{
		$sql="select *
			from admins
			where admins.admin = :adminname and admins.password = :password ";
		$arr = array(":adminname"=>$name_adminname, ":password"=>$pass_admin);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data[0];
		else return array();
	}
}

?>