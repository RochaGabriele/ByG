<?php
session_start();
require_once("solo.php");
try{
    $control = new solo();
    if($control->selecionarPadrao()){
    	$_SESSION['te'] = True;
    	$te = True;
        header("Location: ../visual/painel.php");
    }
}catch(Exception $e){
    echo "Erro: $e->getMessage()";
}

?>
