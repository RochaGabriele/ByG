<?php
session_start();
if($_SESSION['usr']){
	session_destroy();
	header("location: ../visual/bone.php");
}else{	
	header("location: ../visual/bone.php");
}
?>
