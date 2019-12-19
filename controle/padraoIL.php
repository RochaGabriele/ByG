<?php
session_start();
try{
	$_SESSION['il'] = True;
	$il = True;
    header("Location: ../visual/painel.php");
}catch(Exception $e){
    echo "Erro: $e->getMessage()";
}

?>
