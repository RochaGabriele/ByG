<?php
require_once("UsuarioControle.php");

session_start();
$controle = new UsuarioControle();
$itens = $controle->selecionarTodos();
    if($itens != NULL){
        foreach($itens as $atual){
        	if($_POST['user_checar'] == $atual->getUser() && $_POST['senha_checar'] == $controle->Descr($atual->getPasw())){
        		$_SESSION['usrChecar']=$_POST['user_checar'];
        		$_SESSION['pwdChecar']=$_POST['senha_checar'];
        		$data="Pronto! Agora é só modificar.";
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
