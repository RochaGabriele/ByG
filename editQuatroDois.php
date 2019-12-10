<?php
session_start();
require_once("controle/solo.php");
try{
    $usuario = new divQuatro();
    $usuario->setTextoQuatro($_POST['nome']);
    $control = new solo();
    if($control->updateQuatroDois($usuario)){
    	$_SESSION['tc'] = False;
        header("Location: painel.php");
    }
}catch(Exception $e){
    echo "Erro: $e->getMessage()";
}

?>
