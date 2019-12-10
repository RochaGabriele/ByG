<?php
session_start();
if($_SESSION['usr']){
	session_destroy();
	header("location: bone.php");
}else{	
	header("location: bone.php");
}
?>
