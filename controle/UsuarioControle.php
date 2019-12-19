<?php
require_once("Conect.php");
require_once("../modelo/Usuario.php");
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
        function inserir($usuario){
            try{
                $conexao = new Conexao();
				$user = $usuario->getUser();
				$senha = $usuario->getPasw();
                $cmd = $conexao->getConexao()->prepare("INSERT INTO user(user,pasw) values(:u,:s);");
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
        
        function Criptografa($texto){
			$a=fopen("aChave.txt","r");
			$c=fread($a,4096);
			$cifragem="AES-128-CBC";
			$tamanho=openssl_cipher_iv_length($cifragem);
			$tm=openssl_random_pseudo_bytes($tamanho);
			$criptografar=openssl_encrypt($texto,$cifragem,$c,OPENSSL_RAW_DATA,$tm);
			$criptografar=base64_encode($tm.$criptografar);
			return $criptografar;
		}
		
		function Descr($textc){
			$textc=base64_decode($textc);
			$a=fopen("aChave.txt","r");
			$chave=fread($a,4096);
			$cifragem="AES-128-CBC";
			$tamanho=openssl_cipher_iv_length($cifragem);
			$tm=mb_substr($textc,0,$tamanho,'8bit');
			$textc=mb_substr($textc,$tamanho,null,'8bit');
			$desc=openssl_decrypt($textc,$cifragem,$chave,OPENSSL_RAW_DATA,$tm);
			return $desc;	
		}
        
     }
?>





