<?php
class User extends Db
{
	/*Backend*/
	public function delete($id)
	{
		$baiviet = new Post();
    $data = $baiviet->getAll();
    $dem = 0;

    $row = $this->getById($id);

    foreach ($data as $r) {
    	if ($r["name_tacgia"] == $row["name_user"])
    		$dem++;
    }
    if ($dem > 0) {
    	return 0;
    }
    else {
			$sql = "DELETE FROM user WHERE id_user=:id ";
			$arr =  Array(":id"=>$id);
			return $this->exeNoneQuery($sql, $arr);	
		}	
	}
	
	public function getById($id)
	{
		$sql="select * 
			from user
			where  id_user=:id ";
		$arr = array(":id"=>$id);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data[0];
		else return array();
	}
	
	public function getAll()
	{
		return $this->exeQuery("select * from user");
	}
	
	public function saveEdit($id) {
		$name_user = Utils::postIndex("name_user", "");
		$email_user = Utils::postIndex("email_user", "");
		$ngaysinh_user = postIndex("ngaysinh_user", "");
		$gioitinh_user = Utils::postIndex("gioitinh_user", "");
		$sdt_user = Utils::postIndex("sdt_user", "");
		$pass_user = Utils::postIndex("pass2_user", "");

		if ($name_user == "" || $email_user == "") return 0;

		if ($pass_user == "") {
			$sql="UPDATE user SET name_user=:name_user, email_user=:email_user, ngaysinh_user=:ngaysinh_user, gioitinh_user=:gioitinh_user, sdt_user=:sdt_user WHERE id_user=:id";
			$arr = array(":id"=>$id, ":name_user"=>$name_user, ":email_user"=>$email_user, ":ngaysinh_user"=>$ngaysinh_user, "gioitinh_user"=>$gioitinh_user, ":sdt_user"=>$sdt_user);
		}
		else {
			$pass_user = MD5(Utils::postIndex("pass2_user", ""));
			$sql="UPDATE user SET name_user=:name_user, email_user=:email_user, ngaysinh_user=:ngaysinh_user, gioitinh_user=:gioitinh_user, sdt_user=:sdt_user, pass_user=:pass_user WHERE id_user=:id";
			$arr = array(":id"=>$id, ":name_user"=>$name_user, ":email_user"=>$email_user, ":ngaysinh_user"=>$ngaysinh_user, "gioitinh_user"=>$gioitinh_user, ":sdt_user"=>$sdt_user, ":pass_user"=>$pass_user);
		}
		
		return $this->exeNoneQuery($sql, $arr);	
	}

	public function saveAddNew() {
		$name_user = Utils::postIndex("name_user", "");
		$email_user = Utils::postIndex("email_user", "");
		$ngaysinh_user = postIndex("ngaysinh_user", "");
		$gioitinh_user = Utils::postIndex("gioitinh_user", "");
		$sdt_user = Utils::postIndex("sdt_user", "");
		$pass_user = MD5(Utils::postIndex("pass2_user", ""));

		if ($name_user=="" || $pass_user== "" || $email_user=="") return 0;
		
		$sql="INSERT INTO user(name_user, email_user, ngaysinh_user, gioitinh_user, sdt_user, pass_user, level_user) values(:name_user, :email_user, :ngaysinh_user, :gioitinh_user, :sdt_user, :pass_user, 0)";
		$arr = array(":name_user"=>$name_user, ":email_user"=>$email_user, ":ngaysinh_user"=>$ngaysinh_user, "gioitinh_user"=>$gioitinh_user, ":sdt_user"=>$sdt_user, ":pass_user"=>$pass_user);

		return $this->exeNoneQuery($sql, $arr);
	}
	
	/*Font-end*/
	public function isUserNameExist($name_user, $email_user)
	{
		$sql="SELECT * FROM user WHERE name_user=:name_user OR email_user=:email_user";
		$arr = array(":name_user"=>$name_user, ":email_user"=>$email_user);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return true;
		return false;
	}
	
	public function checkRegister($name_user, $pass1_user, $pass2_user)
	{
		$err = "";
		if(!preg_match("/^[a-zA-Z ]*$/", convert_vi_to_en($name_user)))
			$err .= "Name không được chứa kí tự đặc biệt!";
		else if(strlen($name_user) < 4) 
			$err .= "Name không được ít hơn 4 kí tự";
		else if($pass2_user != $pass1_user) 
			$err .= "Xác nhận mật khẩu sai";
		return $err;
	}

	public function login($name_username, $pass_user)
	{
		$sql="select *
			from users
			where users.user = :username and users.password = :password ";
		$arr = array(":username"=>$name_username, ":password"=>$pass_user);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data[0];
		else return array();
	}
}

?>