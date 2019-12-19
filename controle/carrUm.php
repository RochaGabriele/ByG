<?php
	try{
    	require_once('Conect.php');
    	$con = new Conexao();
    	$sql = "SELECT * FROM imgUm WHERE id=:i;";
    	$cmd = $con->getConexao()->prepare($sql);
    	$cmd->bindParam('i',$_GET['id']);
    	$cmd->execute();
    	$result = $cmd->fetch(PDO::FETCH_OBJ);
    	header("Content-type: {$result->tipoUm}");
    	echo $result->binUm;
    }catch(PDOException $ex){
    	echo "Erro: {$ex->getMessage()}";
    }
?>
