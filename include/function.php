<?php
function loadClass($c)
{
	include ROOT."/classes/".$c.".class.php";
}

function getIndex($index, $value='')
{
	$data = isset($_GET[$index])? $_GET[$index]:$value;
	return $data;
}

function postIndex($index, $value='')
{
	$data = isset($_POST[$index])? $_POST[$index]:$value;
	return $data;
}

function requestIndex($index, $value='')
{
	$data = isset($_REQUEST[$index])? $_REQUEST[$index]:$value;
	return $data;
}

function isStrongPassword($pwd)
{
	$hasUppercase = false;
	$hasNumber = false;
	$hasLowercase = false;
	$hasSpecialChar = false;
	$str = str_split($pwd);
	foreach ($str as $c) {
		if($c >= "A" && $c <= "Z")
			$hasUppercase = true;
		if($c >= "a" && $c <= "z")
			$hasLowercase = true;
		if($c >= "0" && $c <= "9")
			$hasNumber = true;
		$specialchars = str_split(" !#$%&'()*+,-./:;<=>?@[\]^_`{|}~");
		if(in_array($c, $specialchars)!=false || $c == '"')
			$hasSpecialChar = true;
	}
	
	if($hasUppercase == true && $hasLowercase == true && $hasNumber== true && $hasSpecialChar == true)
		return true;
	return false;
	
}

function isValidName($name)
{
	$str = str_split($name);
	foreach ($str as $c) {
		$specialchars = str_split("!#$%&'()*+,-./:;<=>?@[\]^_`{|}~");
		if(in_array($c, $specialchars)==true || $c == '"')
			return false;
	}
	return true;
}

// Chuyển tiếng việt có dấu sang tiếng việt không dấu
function convert_vi_to_en($str) {
	if(!$str) return false;
	$utf8 = array(
		'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
		'd'=>'đ|Đ',
		'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
		'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',
		'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
		'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
		'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ'
	 );
	foreach($utf8 as $ascii=>$uni) $str = preg_replace("/($uni)/i",$ascii,$str);
	return $str;
}

// Kiểm tra có các ký tự khác ngoài chữ a-zA-z không
function isValidText($text_input) {
	if(!preg_match("/^[a-zA-Z ]*$/", convert_vi_to_en($text_input)))
		return false;
	return true;
}

// Kiem tra file anh
function isValidImage($img) {
	$notice = "";
	if (!empty($img)) { 

		$file_name = $img['name'];
	  $file_size = $img['size'];
	  $file_tmp = $img['tmp_name'];
	  $file_type = $img['type'];
	  $arrayImg = array("jpeg","jpg","png");

	  $target_dir = ROOT . "/public/assets/images/";
	  $target_file = $target_dir .basename($file_name);
	  $uploadOK = 1;
	  $image_type = pathinfo($target_file,PATHINFO_EXTENSION);

	  if (!empty($file_tmp))
	  	$check = getimagesize($file_tmp);

	  if (!isset($check))
	  	$notice .= "You have not selected a file yet";
	  else if ($check === false)
	  	$notice .= "File is not an image.";	
	  /*else if (file_exists($target_file))
	  	$notice .= "Sorry, file already exists.";*/
	  else if (!in_array($image_type,$arrayImg)) 
	  	$notice .= "Sorry, only JPG, JPEG, PNG files are allowed.";
	  else if ($file_size > 500000)
	  	$notice .= "Sorry, your file is too large.";
	  else if (!move_uploaded_file($file_tmp,$target_file))
	  	$notice .= "Sorry, there was an error uploading your file.";
	}
	else 
		$notice .= "Chua chon file";
	return $notice;
}