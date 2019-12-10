<?php
require_once("Conect.php");
require_once("modelo/Usuario.php");
class UsuarioControle{
	        function selecionarTodos(){
            try{
                $conexao = new Conexao();
                $cmd = $conexao->getConexao()->prepare("SELECT * FROM user;");
                $cmd->execute();
                $resultado = $cmd->fetchAll(PDO::FETCH_CLASS, "Usuario");
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }
        
        function update($usuario){
            try{
                $conexao = new Conexao();
				$user = $usuario->getUser();
				$senha = $usuario->getPasw();
                $cmd = $conexao->getConexao()->prepare("UPDATE user SET user = :u,pasw = :s;");
                $cmd->bindParam("u", $user);
                $cmd->bindParam("s", $senha);              
				if($cmd->execute()){
					return true;
				}else{
					return false;
				}
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }
        
     }
?>





