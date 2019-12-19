<?php
session_start();
try{
	$_SESSION['iDir'] = True;
	$iDir = True;
    header("Location: ../visual/painel.php");
}catch(Exception $e){
    echo "Erro: $e->getMessage()";
}

?>
