<?php
session_start();
try{
	$_SESSION['iTres'] = True;
	$iTres = True;
    header("Location: ../visual/painel.php");
}catch(Exception $e){
    echo "Erro: $e->getMessage()";
}

?>
