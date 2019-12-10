<?php
require_once("controle/UsuarioControle.php");

session_start();
$controle = new UsuarioControle();
$itens = $controle->selecionarTodos();
    if($itens != NULL){
        foreach($itens as $atual){
        	if($_POST['user_checar'] == $atual->getUser() && $_POST['senha_checar'] == $atual->getPasw()){
        		$_SESSION['usrChecar']=$_POST['user_checar'];
        		$_SESSION['pwdChecar']=$_POST['senha_checar'];
        		header("Location: bone.php#paramodificar");
        	}else{
				header("Location: bone.php#paramodificar");
        	}    
        }       
        
    }else{
        echo "<h3>aiai.</h3>";
    }
?>
