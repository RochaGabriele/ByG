<?php
require_once("Conect.php");
require_once("../modelo/divDois.php");
require_once("../modelo/divQuatro.php");
require_once("../modelo/divSeis.php");
require_once("../modelo/descricao.php");
require_once("../modelo/padrao.php");
require_once("../modelo/posts.php");
class Solo{    

	  function selecionarPosts(){
            try{
                $conexao = new Conexao();
                $cmd = $conexao->getConexao()->prepare("SELECT * FROM posts;");
                $cmd->execute();
                $resultado = $cmd->fetchAll(PDO::FETCH_CLASS, "posts");
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }
        
        function inserirPosts($posts){
            try{
                $conexao = new Conexao();
                $texto = $posts->getPostagem();
                $subtexto = $posts->getSubtext();
                $name = $posts->getNamePost();
                $type = $posts->getTipoPost();
                $bin = $posts->getBinPost();
                $cmd = $conexao->getConexao()->prepare("INSERT INTO posts(postagem,subtext,namePost,tipoPost,binPost) VALUES(:p,:s,:n,:t,:b);");
                $cmd->bindParam("p", $texto);
                $cmd->bindParam("s", $subtexto);
                $cmd->bindParam('n',$name);
				$cmd->bindParam('t',$type);
				$cmd->bindParam('b',$bin);
                if($cmd->execute()){
                    $conexao->fecharConexao();
                    return true;
                }else{
                    $conexao->fecharConexao();
                    return false;
                }
            }catch(PDOException $e){
                echo "Erro do banco: {$e->getMessage()}";
                return false;
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
                return false;
            }
        }
        
        
        function remover($id){
            try{
                $conexao = new Conexao();
                $cmd = $conexao->getConexao()->prepare("DELETE FROM posts WHERE id=:id;");
                $cmd->bindParam("id", $id);
                if($cmd->execute()){
                    return true;
                }else{
                    return false;
                }
            }catch(PDOException $e){
                echo "Erro de PDO: {$e->getMessage()}";
                return false;
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
                return false;
            }
        }
        
        
        function update($id, $posts){
            try{
                $conexao = new Conexao();
                $postagem = $posts->getPostagem();
                $subtext = $posts->getSubtext();
                $name = $posts->getNamePost();
                $type = $posts->getTipoPost();
                $bin = $posts->getBinPost();
                $cmd = $conexao->getConexao()->prepare("UPDATE posts SET postagem = :p, subtext = :s, namePost = :n, tipoPost = :t, binPost = :b WHERE id=:id;");
                $cmd->bindParam("id", $id);
                $cmd->bindParam("p", $postagem); 
                $cmd->bindParam("s", $subtext); 
                $cmd->bindParam('n',$name);
				$cmd->bindParam('t',$type);
				$cmd->bindParam('b',$bin);         
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
        
        
        function selecionarPid($id){
            try{
                $conexao = new Conexao();	
                $cmd = $conexao->getConexao()->prepare("SELECT * FROM posts WHERE id=:id;");
                $cmd->bindParam("id", $id);
                $cmd->execute();
                $resultado = $cmd->fetchAll(PDO::FETCH_CLASS, "posts");
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }
        
	  
	  function selecionarPadrao(){
            try{
                $conexao = new Conexao();
                $cmd = $conexao->getConexao()->prepare("SELECT textPadrao FROM padrao WHERE id=1;");
                $cmd->execute();
                $resultado = $cmd->fetchAll(PDO::FETCH_CLASS, "padrao");
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }
        
        
        
        function selecionarEmailPadrao(){
            try{
                $conexao = new Conexao();
                $cmd = $conexao->getConexao()->prepare("SELECT emailPadrao FROM padrao WHERE id=1;");
                $cmd->execute();
                $resultado = $cmd->fetchAll(PDO::FETCH_CLASS, "padrao");
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }


	function updateDois($divDois){
            try{
                $conexao = new Conexao();
                $texto = $divDois->getTextoDois();
                $cmd = $conexao->getConexao()->prepare("UPDATE divDois SET textoDois = :n;");
                $cmd->bindParam("n", $texto);
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
        
        
        
        function selecionarTodosDois(){
            try{
                $conexao = new Conexao();
                $cmd = $conexao->getConexao()->prepare("SELECT * FROM divDois;");
                $cmd->execute();
                $resultado = $cmd->fetchAll(PDO::FETCH_CLASS, "divDois");
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }
        
        
   





function selecionarPidTresUm(){
            try{
                $conexao = new Conexao();	
                $cmd = $conexao->getConexao()->prepare("SELECT legenda FROM descricao WHERE id=1;");
                $cmd->execute();
                $resultado = $cmd->fetchAll(PDO::FETCH_CLASS, "descricao");
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }
        
        
function selecionarPidTresDois(){
            try{
                $conexao = new Conexao();	
                $cmd = $conexao->getConexao()->prepare("SELECT legenda FROM descricao WHERE id=2;");
                $cmd->execute();
                $resultado = $cmd->fetchAll(PDO::FETCH_CLASS, "descricao");
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }
        
        
        
function selecionarPidTresTres(){
            try{
                $conexao = new Conexao();	
                $cmd = $conexao->getConexao()->prepare("SELECT legenda FROM descricao WHERE id=3;");
                $cmd->execute();
                $resultado = $cmd->fetchAll(PDO::FETCH_CLASS, "descricao");
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }
function updateTresUm($descricao){
            try{
                $conexao = new Conexao();
                $descricao = $descricao->getLegenda();
                $cmd = $conexao->getConexao()->prepare("UPDATE descricao SET legenda = :n WHERE id=1;");
                $cmd->bindParam("n", $descricao);
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
function updateTresDois($descricao){
            try{
                $conexao = new Conexao();
                $descricao = $descricao->getLegenda();
                $cmd = $conexao->getConexao()->prepare("UPDATE descricao SET legenda = :n WHERE id=2;");
                $cmd->bindParam("n", $descricao);
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
function updateTresTres($descricao){
            try{
                $conexao = new Conexao();
                $descricao = $descricao->getLegenda();
                $cmd = $conexao->getConexao()->prepare("UPDATE descricao SET legenda = :n WHERE id=3;");
                $cmd->bindParam("n", $descricao);
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









       function updateQuatroUm($divQuatro){
            try{
                $conexao = new Conexao();
                $texto = $divQuatro->getTextoQuatro();
                $cmd = $conexao->getConexao()->prepare("UPDATE divQuatro SET textoQuatro = :n WHERE id=1;");
                $cmd->bindParam("n", $texto);
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
        
        
               function updateQuatroDois($divQuatro){
            try{
                $conexao = new Conexao();
                $texto = $divQuatro->getTextoQuatro();
                $cmd = $conexao->getConexao()->prepare("UPDATE divQuatro SET textoQuatro = :n WHERE id=2;");
                $cmd->bindParam("n", $texto);
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
        
        
        function updateQuatroTres($divQuatro){
            try{
                $conexao = new Conexao();
                $texto = $divQuatro->getTextoQuatro();
                $cmd = $conexao->getConexao()->prepare("UPDATE divQuatro SET textoQuatro = :n WHERE id=3;");
                $cmd->bindParam("n", $texto);
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
        
  
        
        function selecionarTodosQuatro(){
            try{
                $conexao = new Conexao();
                $cmd = $conexao->getConexao()->prepare("SELECT * FROM divQuatro;");
                $cmd->execute();
                $resultado = $cmd->fetchAll(PDO::FETCH_CLASS, "divQuatro");
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }
        
        function selecionarPidQuatroUm(){
            try{
                $conexao = new Conexao();	
                $cmd = $conexao->getConexao()->prepare("SELECT * FROM divQuatro WHERE id=1;");
                $cmd->execute();
                $resultado = $cmd->fetchAll(PDO::FETCH_CLASS, "divQuatro");
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }
        
        function selecionarPidQuatroDois(){
            try{
                $conexao = new Conexao();	
                $cmd = $conexao->getConexao()->prepare("SELECT * FROM divQuatro WHERE id=2;");
                $cmd->execute();
                $resultado = $cmd->fetchAll(PDO::FETCH_CLASS, "divQuatro");
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }
        
        
        function selecionarPidQuatroTres(){
            try{
                $conexao = new Conexao();	
                $cmd = $conexao->getConexao()->prepare("SELECT * FROM divQuatro WHERE id=3;");
                $cmd->execute();
                $resultado = $cmd->fetchAll(PDO::FETCH_CLASS, "divQuatro");
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }


        


















      function updateSeis($divSeis){
            try{
                $conexao = new Conexao();
                $texto = $divSeis->getTextoSeis();
                $email = $divSeis->getEmail();
                $cmd = $conexao->getConexao()->prepare("UPDATE divSeis SET textoSeis = :n,email = :e;");
                $cmd->bindParam("n", $texto);
                $cmd->bindParam("e", $email);
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
        
        
        
        
        function removerSeis($id){
            try{
                $conexao = new Conexao();
                $cmd = $conexao->getConexao()->prepare("DELETE FROM divSeis WHERE id=:id;");
                $cmd->bindParam("id", $id);
                if($cmd->execute()){
                    return true;
                }else{
                    return false;
                }
            }catch(PDOException $e){
                echo "Erro de PDO: {$e->getMessage()}";
                return false;
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
                return false;
            }
        }
        
        
        
        function selecionarTodosSeis(){
            try{
                $conexao = new Conexao();
                $cmd = $conexao->getConexao()->prepare("SELECT * FROM divSeis;");
                $cmd->execute();
                $resultado = $cmd->fetchAll(PDO::FETCH_CLASS, "divSeis");
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }
        
     
        function selecionarPidSeis($id){
            try{
                $conexao = new Conexao();	
                $cmd = $conexao->getConexao()->prepare("SELECT * FROM divSeis WHERE id=:id;");
                $cmd->bindParam("id", $id);
                $cmd->execute();
                $resultado = $cmd->fetchAll(PDO::FETCH_CLASS, "divSeis");
                return $resultado;
            }catch(PDOException $e){
                echo "Erro no banco: {$e->getMessage()}";
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
            }
        }
        
        
        
        function inserirSeis($divSeis){
            try{
                $conexao = new Conexao();
                $texto = $divSeis->getTexto();
                $cmd = $conexao->getConexao()->prepare("INSERT INTO divSeis(texto) VALUES(:n);");
                $cmd->bindParam("n", $texto);
                if($cmd->execute()){
                    $conexao->fecharConexao();
                    return true;
                }else{
                    $conexao->fecharConexao();
                    return false;
                }
            }catch(PDOException $e){
                echo "Erro do banco: {$e->getMessage()}";
                return false;
            }catch(Exception $e){
                echo "Erro geral: {$e->getMessage()}";
                return false;
            }
        }
        
    }
?>





