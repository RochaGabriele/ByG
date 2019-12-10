<?php
	try{
    	require_once('controle/Conect.php');
    	$con = new Conexao();
    	$sql = "SELECT * FROM imgCinco WHERE id=:i;";
    	$cmd = $con->getConexao()->prepare($sql);
    	$cmd->bindParam('i',$_GET['id']);
    	$cmd->execute();
    	$result = $cmd->fetch(PDO::FETCH_OBJ);
    	header("Content-type: {$result->tipoCinco}");
    	echo $result->binCinco;
    }catch(PDOException $ex){
    	echo "Erro: {$ex->getMessage()}";
    }
?>
