<?php
	try{
    	require_once('controle/Conect.php');
    	$con = new Conexao();
    	$sql = "SELECT * FROM imgTres WHERE id=:i;";
    	$cmd = $con->getConexao()->prepare($sql);
    	$cmd->bindParam('i',$_GET['id']);
    	$cmd->execute();
    	$result = $cmd->fetch(PDO::FETCH_OBJ);
    	header("Content-type: {$result->tipoTres}");
    	echo $result->binTres;
    }catch(PDOException $ex){
    	echo "Erro: {$ex->getMessage()}";
    }
?>
