<?php
session_start();
require_once("solo.php");
try{
    $control = new solo();
    if($control->selecionarPadrao()){
    	$_SESSION['dd'] = True;
    	$dd = True;
        header("Location: ../visual/painel.php");
    }
}catch(Exception $e){
    echo "Erro: $e->getMessage()";
}

?>
