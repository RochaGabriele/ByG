<?php
session_start();
require_once("../controle/solo.php");
$controle = new Solo();
if($_SESSION['usr']){
echo "
	<link rel='stylesheet' type='text/css' href='teste.css' />
	
	<div id='mySidenav' class='sidenav'>
	  <a href='javascript:void(0)' class='closebtn' onclick='closeNav()'>&times;</a>
	  <p class='teste'><a href='home.php'>Home</a></p>
	  <p class='teste'><a href='painel.php'>Editar Home</a></p>
	   <p class='teste'><a href='painelPosts.php'>Painel Posts</a></p>
	   <p class='teste'><a href='verPosts.php'>Ver Posts</a></p>
	   <p class='teste'><a href='verPostsII.php'>Visão do Usuario</a></p>
	  <p class='teste'><a href='../controle/sair.php'>Sair</a></p>
	</div>


	<div id='main'>	
		<span style='font-size:30px;cursor:pointer' class='esq' onclick='openNav()'>&#9776;</span>
	</div>
	";


	
		if(isset($_SESSION['il'])){
			if($_SESSION['il']){
					echo "<div>
				  		<img class='ai' alt='ai' src='../controle/carrUm.php?id=2;'>
				</div>
				
				";    
			}else{	  
						echo "<div>
					  		<img class='ai' alt='ai' src='../controle/carrUm.php?id=1;'>
					</div>
					
					";
			}
		}else{	  
						echo "<div>
					  		<img class='ai' alt='ai' src='../controle/carrUm.php?id=2;'>
					</div>
					
					";
			}





	echo "	
		<script>
			function openNav() {
			  document.getElementById('mySidenav').style.width = '35%';
			  document.body.style.backgroundColor = 'rgba(0,0,0,0.5)';
			}

			function closeNav() {
			  document.getElementById('mySidenav').style.width = '0';
			  document.getElementById('main').style.marginLeft= '0';
			  document.body.style.backgroundColor = '#fff';
			}
		</script>
		";
















	$pos = $controle->selecionarPosts();
			if($pos != NULL){
				foreach($pos as $atual){
					echo "<link rel='stylesheet' type='text/css' href='teste.css' />
					<div class='lin'>
				     		<div class='posts'>
								<h3 class='agens'>{$atual->getPostagem()}</h3>
								<p class='sub'>{$atual->getSubtext()}</p>";
									echo"<img class='iPost' src='../controle/carr.php?id={$atual->getId()};'>";
				    		echo"<a href='editarPost.php?id={$atual->getId()}' id='ed'>Editar </a>
				    		<a href='../controle/remover.php?id={$atual->getId()}' id='rm'> Remover</a>
				    		
				    		</div>
				    	</div>";
				   }
			}else{
				echo "<h3 style='text-align: center; margin-bottom: 90px;'>Nada Foi Postado Ainda.</h3>";
			}
			
			
			
			
			
			
			
			
	if(isset($_SESSION['em'])){
		if($_SESSION['em']){
				$padd = $controle->selecionarEmailPadrao();
				if($padd != NULL){
					foreach($padd as $atual){
						echo"
						  	<link rel='stylesheet' type='text/css' href='teste.css' />
						<footer class='footer-distributed'>
							<div class='footer-left'>
							  	<img src='../ibagens/logo.png'>
								<h3>By<span>G</span></h3>
							</div>
				 
							<div class='footer-center'>
								<div>
									<i class='fa fa-envelope'></i>
									<p style='font-family: Louis George Cafe;'>{$atual->getEmailPadrao()}</p>
								</div>
						  ";
						}
					   
				}else{
					echo "<h3>Nenhum registro armazenado.</h3>";
				}
			}else{	
				$seis = $controle->selecionarTodosSeis();
				if($seis != NULL){
					foreach($seis as $atual){
						echo "
						<link rel='stylesheet' type='text/css' href='teste.css' />
						<footer class='footer-distributed'>
							<div class='footer-left'>
							  	<img src='../ibagens/logo.png'>
								<h3>By<span>G</span></h3>
							</div>
				 
							<div class='footer-center'>
								<div>
									<i class='fa fa-envelope'></i>
									<p style='font-family: Louis George Cafe;'>{$atual->getEmail()}</p>
								</div>";
							}
				}else{
					echo "<h3>Nenhum registro armazenado.</h3>";
				}

			}
    }else{
    
    	$padd = $controle->selecionarEmailPadrao();
				if($padd != NULL){
					foreach($padd as $atual){
						echo"
						  	<link rel='stylesheet' type='text/css' href='teste.css' />
						<footer class='footer-distributed'>
							<div class='footer-left'>
							  	<img src='../ibagens/logo.png'>
								<h3>By<span>G</span></h3>
							</div>
				 
							<div class='footer-center'>
								<div>
									<i class='fa fa-envelope'></i>
									<p style='font-family: Louis George Cafe;'>{$atual->getEmailPadrao()}</p>
								</div>
						  ";
						}
					   
				}else{
					echo "<h3>Nenhum registro armazenado.</h3>";
				}
    
    }
    
	
						
						
						
						
						
						
						
		if(isset($_SESSION['ts'])){			
			if($_SESSION['ts']){
				$padd = $controle->selecionarPadrao();
				if($padd != NULL){
					foreach($padd as $atual){
						echo"
						  	<div>
									<i class='fa fa-company'></i>
									<p class='footer-company-name'>© 2019 Barbosa, G.R</p>
								</div>
								
							</div>
							<div class='footer-right'>
								<p class='footer-company-about' style='font-family: Louis George Cafe; font-size: 18px; '>
									<span style='font-size: 24px;'>Sobre</span>{$atual->getTextPadrao()}</p>
								
							</div>
						</footer>
						  ";
						}
					   
				}else{
					echo "<h3>Nenhum registro armazenado.</h3>";
				}
			}else{	
				$seisUm = $controle->selecionarTodosSeis();
				if($seisUm != NULL){
					foreach($seisUm as $atual){
						echo "	
								<div>
									<i class='fa fa-company'></i>
									<p class='footer-company-name'>© 2019 Barbosa, G.R</p>
								</div>
								
							</div>
							<div class='footer-right'>
								<p class='footer-company-about' style='font-family: Louis George Cafe;'>
									<span>About</span>{$atual->getTextoSeis()}</p>
								
							</div>
						</footer>

					";
					}
				}else{
					echo "<h3>Nenhum registro armazenado.</h3>";
				}
			}					
		}else{
		
			$padd = $controle->selecionarPadrao();
				if($padd != NULL){
					foreach($padd as $atual){
						echo"
						  	<div>
									<i class='fa fa-company'></i>
									<p class='footer-company-name'>© 2019 Barbosa, G.R</p>
								</div>
								
							</div>
							<div class='footer-right'>
								<p class='footer-company-about' style='font-family: Louis George Cafe; font-size: 18px; '>
									<span style='font-size: 24px;'>Sobre</span>{$atual->getTextPadrao()}</p>
								
							</div>
						</footer>
						  ";
						}
					   
				}else{
					echo "<h3>Nenhum registro armazenado.</h3>";
				}
		
		}				  
			  

}else{
	header("Location: bone.php");
}
?>
