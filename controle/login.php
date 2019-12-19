<?php
require_once("UsuarioControle.php");

session_start();
$controle = new UsuarioControle();
$itens = $controle->selecionarTodos();
	if($itens != NULL){
        foreach($itens as $atual){
        	if($_POST['user'] == $atual->getUser() && $_POST['senha'] == $controle->Descr($atual->getPasw())){
        		$_SESSION['usr']=$_POST['user'];
        		$_SESSION['pwd']=$_POST['senha'];
        		$data="Seja Bem-Vindo ".strtoupper($_POST['user']."!");
                echo $data;
        	}else{
                $data=false;
                echo $data;

        	}    
        }       
        
    }else{
        echo "<h3>aiai.</h3>";
    }
?>
