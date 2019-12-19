<?php
session_start();
require_once("solo.php");
try{
    $usuario = new divQuatro();
    $usuario->setTextoQuatro($_POST['nome']);
    $control = new solo();
    if($control->updateQuatroDois($usuario)){
    	$_SESSION['tc'] = False;
    	$tc = False;
        header("Location: ../visual/painel.php");
    }
}catch(Exception $e){
    echo "Erro: $e->getMessage()";
}

?>
