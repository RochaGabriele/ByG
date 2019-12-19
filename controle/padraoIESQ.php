<?php
session_start();
try{
	$_SESSION['iEsq'] = True;
	$iEsq = True;
    header("Location: ../visual/painel.php");
}catch(Exception $e){
    echo "Erro: $e->getMessage()";
}

?>
