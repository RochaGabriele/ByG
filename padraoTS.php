<?php
session_start();
require_once("controle/solo.php");
try{
    $control = new solo();
    if($control->selecionarPadrao()){
    	$_SESSION['ts'] = True;
        header("Location: painel.php");
    }
}catch(Exception $e){
    echo "Erro: $e->getMessage()";
}

?>
