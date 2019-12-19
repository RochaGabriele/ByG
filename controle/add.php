<?php
require_once("solo.php");
require_once('Conect.php');
session_start();
if($_SESSION['usr']){
	$file = $_FILES['upload'];
	
	try{
       	$posts = new posts();
		$posts->setPostagem($_POST['postagem']);
		$posts->setSubtext($_POST['subtext']);
		$posts->setNamePost($file['name']);
		$posts->setTipoPost($file['type']);
		$posts->setBinPost(file_get_contents($file['tmp_name']));
		$control = new Solo();
		if($control->inserirPosts($posts)){
		    header("Location: ../visual/painelPosts.php");
		}
	}catch(Exception $e){
		echo "Erro: {$e->getMessage()}";
	}
}else{
	header("Location: ../visual/bone.php");
}
?>
