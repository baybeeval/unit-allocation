<?php
session_start();
ob_start();
$current_file=$_SERVER['SCRIPT_NAME'];
function alreadyin(){
	if (isset($_SESSION['username'])&& !empty($_SESSION['username'])) {
		return true;
			}
else{
	return false;
}
}
?>