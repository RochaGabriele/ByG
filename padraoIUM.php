<?php
session_start();
try{
	$_SESSION['iUm'] = True;
    header("Location: painel.php");
}catch(Exception $e){
    echo "Erro: $e->getMessage()";
}

?>
