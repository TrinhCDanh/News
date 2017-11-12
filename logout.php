<?php
	unset($_SESSION["user_login"]);
	unset($_SESSION["user_data"]);
	header("location:index.php");
	exit;

