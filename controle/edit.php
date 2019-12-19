<?php
require_once("solo.php");
require_once('Conect.php');

try{
	$file = $_FILES['upload'];
	$arq = file_get_contents($file['tmp_name']);
    $posts = new posts();
	$posts->setPostagem($_POST['postagem']);
	$posts->setSubtext($_POST['subtext']);
	if($file['name'] == NULL or $file['type'] == NULL or $arq == NULL){
		$posts->setNamePost($file['name']);
		$posts->setTipoPost($file['type']);
		$posts->setBinPost($arq);
		$existe = False;
	}else{
		$posts->setNamePost($file['name']);
		$posts->setTipoPost($file['type']);
		$posts->setBinPost($arq);
		$existe = True;
	}
	
	$control = new Solo();
    if($control->update($_POST['id'],$posts)){
        header("Location: ../visual/verPosts.php");
    }
}catch(Exception $e){
    echo "Erro: $e->getMessage()";
}

?>
