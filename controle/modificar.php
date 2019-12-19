<?php
require_once("UsuarioControle.php");

$controle = new UsuarioControle();
$itens = $controle->selecionarTodos();

try{
	$usuario = new Usuario();
	$crip = $controle->Criptografa($_POST['senha_cad']);
	$usuario->setPasw($crip);
	$usuario->setUser($_POST['nome_cad']);
	$control = new UsuarioControle();
	if($control->update($usuario)){
		$data="Modificado com sucesso!";
        echo $data;
	}
}catch(Exception $e){
    echo "Erro: $e->getMessage()";
}
?>
