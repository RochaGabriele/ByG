<?php
session_start();
require_once("controle/solo.php");
try{
    $usuario = new divDois();
    $usuario->setTextoDois($_POST['nome']);
    $control = new solo();
    if($control->updateDois($usuario)){
    	$_SESSION['tp'] = False;
        header("Location: painel.php");
    }
}catch(Exception $e){
    echo "Erro: $e->getMessage()";
}

?>
