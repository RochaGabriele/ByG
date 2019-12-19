<?php
session_start();
try{
	$_SESSION['iCen'] = True;
	$iCen = True;
    header("Location: ../visual/painel.php");
}catch(Exception $e){
    echo "Erro: $e->getMessage()";
}

?>
