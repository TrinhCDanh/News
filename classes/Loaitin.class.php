<?php
class Loaitin extends Db{

	public function delete($id_loaitin) {
		$baiviet = new Post();
    $data = $baiviet->getAll();
    $dem = 0;
    foreach ($data as $r) {
    	if ($r["id_loaitin"] == $id_loaitin)
    		$dem++;
    }
    if ($dem > 0) {
    	?>
		    <script language="javascript">
					swal('Thất bại...','Click Ok để tiếp tục!','error');
				</script>
	    <?php
    	return 0;
    }
    else {
    	?>
		    <script language="javascript">
					swal('Thành công','Click Ok để tiếp tục!','success');
				</script>
	    <?php
    
			$sql="delete from loaitin where id_loaitin=:id_loaitin ";
			$arr =  Array(":id_loaitin"=>$id_loaitin);
			return $this->exeNoneQuery($sql, $arr);	
		}
	}
	
	public function getById($id_loaitin) {
		$sql = "SELECT loaitin.* FROM loaitin WHERE loaitin.id_loaitin=:id_loaitin";
		$arr = array(":id_loaitin"=>$id_loaitin);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data[0];
		else return array();
	}
	
	public function getAll() {
		return $this->exeQuery("select * from loaitin");
	}
	
	public function saveEdit($id_loaitin) {
		$id_theloai = Utils::postIndex("id_theloai", "");
		$name_loaitin = Utils::postIndex("name_loaitin", "");
		if ($name_loaitin == "") return 0;//Error 
		$sql = "UPDATE loaitin 
						SET id_theloai=:id_theloai, 
						name_loaitin=:name_loaitin 
						WHERE loaitin.id_loaitin=:id_loaitin";//where cat_id=:id
		$arr = array(":id_loaitin"=>$id_loaitin, ":id_theloai"=>$id_theloai, ":name_loaitin"=>$name_loaitin);
		return $this->exeNoneQuery($sql, $arr);
	}

	public function saveAddNew() {
		$id_theloai = Utils::postIndex("id_theloai", "");
		$name_loaitin = Utils::postIndex("name_loaitin", "");
		if ($name_loaitin == "") return 0;//Error $id =="" || 
		$sql = "INSERT INTO loaitin(id_loaitin, id_theloai, name_loaitin) VALUES(NULL, :id_theloai, :name_loaitin)";
		$arr = array(":id_theloai"=>$id_theloai, ":name_loaitin"=>$name_loaitin);
		return $this->exeNoneQuery($sql, $arr);	
	}

	public function isLoaitinExist($name_loaitin) {
		$sql="SELECT * FROM loaitin WHERE name_loaitin=:name_loaitin";
		$arr = array(":name_loaitin"=>$name_loaitin);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return true;
		return false;
	}

}
?>