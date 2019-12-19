<?php
require_once("solo.php");
$controle = new Solo();
    if($controle->remover($_GET['id'])){
        header("Location: ../visual/verPosts.php");
    }else{
        die();
    }
?>
