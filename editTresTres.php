<?php
session_start();
require_once("controle/solo.php");
try{
    $usuario = new descricao();
    $usuario->setLegenda($_POST['nome']);
    $control = new solo();
    if($control->updateTresTres($usuario)){
    	$_SESSION['dt'] = False;
        header("Location: painel.php");
    }
}catch(Exception $e){
    echo "Erro: $e->getMessage()";
}

?>
