<?php
session_start();
require_once("solo.php");
try{
    $usuario = new descricao();
    $usuario->setLegenda($_POST['nome']);
    $control = new solo();
    if($control->updateTresDois($usuario)){
    	$_SESSION['dd'] = False;
    	$dd = false;
        header("Location: ../visual/painel.php");
    }
}catch(Exception $e){
    echo "Erro: $e->getMessage()";
}

?>
