<?php
session_start();
try{
	$_SESSION['iDois'] = True;
	$iDois = True;
    header("Location: ../visual/painel.php");
}catch(Exception $e){
    echo "Erro: $e->getMessage()";
}

?>
