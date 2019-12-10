<?php
require_once("controle/UsuarioControle.php");

session_start();
$controle = new UsuarioControle();
$itens = $controle->selecionarTodos();
    if($itens != NULL){
        foreach($itens as $atual){
        	if($_POST['user_login'] == $atual->getUser() && $_POST['senha_login'] == $atual->getPasw()){
        		$_SESSION['usr']=$_POST['user_login'];
        		$_SESSION['pwd']=$_POST['senha_login'];
        		header("Location: home.php");
        	}else{
				header("Location: bone.php");
        	}    
        }       
        
    }else{
        echo "<h3>aiai.</h3>";
    }
?>
