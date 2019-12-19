<?php
session_start();
try{
	$_SESSION['iUm'] = True;
	$iUm = True;
    header("Location: ../visual/painel.php");
}catch(Exception $e){
    echo "Erro: $e->getMessage()";
}

?>
