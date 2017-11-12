<?php
class Theloai extends Db{
	
	/*Back-end*/
	public function delete($id_theloai) {
		$loaitin = new Loaitin();
    $data = $loaitin->getAll();
    $dem = 0;
    foreach ($data as $r) {
    	if ($r["id_theloai"] == $id_theloai)
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
    
			$sql="delete from theloai where id_theloai=:id_theloai ";
			$arr =  Array(":id_theloai"=>$id_theloai);
			return $this->exeNoneQuery($sql, $arr);	
		}
	}
	
	public function getById($id_theloai) {
		$sql = "select theloai.* from theloai where theloai.id_theloai=:id_theloai";
		$arr = array(":id_theloai"=>$id_theloai);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return $data[0];
		else return array();
	}
	
	public function getAll() {
		return $this->exeQuery("select * from theloai");
	}
	
	public function saveEdit($id_theloai) {
		$name_theloai = Utils::postIndex("name_theloai", "");
		if ($name_theloai == "") return 0;//Error 
		$sql = "UPDATE theloai SET name_theloai=:name_theloai WHERE theloai.id_theloai=:id_theloai";//where cat_id=:id
		$arr = array(":id_theloai"=>$id_theloai, ":name_theloai"=>$name_theloai);
		return $this->exeNoneQuery($sql, $arr);
	}

	public function saveAddNew() {
		$name_theloai = Utils::postIndex("name_theloai", "");
		if ($name_theloai == "") return 0;//Error $id =="" || 
		$sql = "INSERT INTO theloai(id_theloai, name_theloai) values(NULL, :name_theloai)";
		$arr = array(":name_theloai"=>$name_theloai);
		return $this->exeNoneQuery($sql, $arr);	
	}
	
	public function isTheloaiExist($name_theloai) {
		$sql="SELECT * FROM theloai WHERE name_theloai=:name_theloai";
		$arr = array(":name_theloai"=>$name_theloai);
		$data = $this->exeQuery($sql, $arr);
		if (Count($data)>0) return true;
		return false;
	}

}
?>