<?php
session_start();
require_once("solo.php");
try{
    $usuario = new divQuatro();
    $usuario->setTextoQuatro($_POST['nome']);
    $control = new solo();
    if($control->updateQuatroUm($usuario)){
    	$_SESSION['te'] = False;
    	$te = False;
        header("Location: ../visual/painel.php");
    }
}catch(Exception $e){
    echo "Erro: $e->getMessage()";
}

?>
