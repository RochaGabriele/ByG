<?php
session_start();
try{
	$_SESSION['iEsq'] = True;
    header("Location: painel.php");
}catch(Exception $e){
    echo "Erro: $e->getMessage()";
}

?>
