<?php
session_start();
require_once("solo.php");
try{
    $usuario = new divSeis();
    $usuario->setTextoSeis($_POST['nome']);
    $usuario->setEmail($_POST['email']);
    $control = new solo();
    if($control->updateSeis($usuario)){
    	$_SESSION['em'] = False;
    	$_SESSION['ts'] = False;
    	$em = false;
    	$ts = false;
        header("Location: ../visual/painel.php");
    }
}catch(Exception $e){
    echo "Erro: $e->getMessage()";
}

?>
