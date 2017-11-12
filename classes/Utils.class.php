<?php
class Utils
{
	static function getIndex($index, $val=null) {
		if (isset($_GET[$index]))
			return $_GET[$index];
		return $val;	
	}	
	
	
	static function postIndex($index) {	
		if (isset($_POST[$index])) {
			$s = stripslashes(" $_POST[$index] ");
			$s = trim($s);
			$s = addslashes($s);
			$s = htmlspecialchars($s);
		}
		else $s = "";	
		return $s;	
	}	
	
	static function isEmail($s)
	{
		
	}
	
	static function isWebsite($s)
	{
		
	}
	static function isStrongPassword($s)
	{
		
	}
}

?>