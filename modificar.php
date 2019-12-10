<?php
require_once("controle/UsuarioControle.php");

$controle = new UsuarioControle();
$itens = $controle->selecionarTodos();

try{
	foreach($itens as $atual){
		$usuario = new Usuario();
		$usuario->setPasw($_POST['senha_cad']);
		$usuario->setUser($_POST['nome_cad']);
		$control = new UsuarioControle();
		if($control->update($usuario)){
			header("Location: bone.php");
		}
	}
}catch(Exception $e){
    echo "Erro: $e->getMessage()";
}
?>
