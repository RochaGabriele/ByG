<?php
session_start();
require_once("solo.php");
try{
    $control = new solo();
    if($control->selecionarPadrao()){
    	$_SESSION['du'] = True;
    	$du = True;
        header("Location: ../visual/painel.php");
    }
}catch(Exception $e){
    echo "Erro: $e->getMessage()";
}

?>
