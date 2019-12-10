<?php
	session_start();
require_once("controle/solo.php");
$controle = new Solo();
if($_SESSION['usr']){
	echo "
	<link rel='stylesheet' type='text/css' href='teste.css' />
	
	<div>
	  		<img class='ai' alt='ai' src='carrUm.php?id=2;'>
	</div>
	";
?>
