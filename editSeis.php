<?php
session_start();
require_once("controle/solo.php");
try{
    $usuario = new divSeis();
    $usuario->setTextoSeis($_POST['nome']);
    $usuario->setEmail($_POST['email']);
    $control = new solo();
    if($control->updateSeis($usuario)){
    	$_SESSION['em'] = False;
    	$_SESSION['ts'] = False;
        header("Location: painel.php");
    }
}catch(Exception $e){
    echo "Erro: $e->getMessage()";
}

?>
