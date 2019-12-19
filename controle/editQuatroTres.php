<?php
session_start();
require_once("solo.php");
try{
    $usuario = new divQuatro();
    $usuario->setTextoQuatro($_POST['nome']);
    $control = new solo();
    if($control->updateQuatroTres($usuario)){
    	$_SESSION['td'] = False;
    	$td = false;
        header("Location: ../visual/painel.php");
    }
}catch(Exception $e){
    echo "Erro: $e->getMessage()";
}

?>
