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
	    <p class='teste'><a href='homeII.php'>Visão do Usuario</a></p>
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
		
		
		
		if(isset($_SESSION['tp'])){
		if($_SESSION['tp']){
			$padd = $controle->selecionarPadrao();
			if($padd != NULL){
				foreach($padd as $atual){
					echo "<link rel='stylesheet' type='text/css' href='teste.css' />
					<div class='lin'>
				     		<div class='segunda'>
				    		<h3 class='ali'>{$atual->getTextPadrao()}</h3>
				    		</div>
				    	</div>";
				   }
			}else{
				echo "<h3>Nenhum registro armazenado.</h3>";
			}
		}else{	
			$dois = $controle->selecionarTodosDois();
			if($dois != NULL){
				foreach($dois as $atual){
					echo "<link rel='stylesheet' type='text/css' href='teste.css' />
					<div class='lin'>
				     		<div class='segunda'>
				    		<h3 class='ali'>{$atual->getTextoDois()}</h3>
				    		</div>
				    	</div>";
				   }
			}else{
				echo "<h3>Nenhum registro armazenado.</h3>";
				}
			}
	}else{
	
		$padd = $controle->selecionarPadrao();
			if($padd != NULL){
				foreach($padd as $atual){
					echo "<link rel='stylesheet' type='text/css' href='teste.css' />
					<div class='lin'>
				     		<div class='segunda'>
				    		<h3 class='ali'>{$atual->getTextPadrao()}</h3>
				    		</div>
				    	</div>";
				   }
			}else{
				echo "<h3>Nenhum registro armazenado.</h3>";
			}
	
	}

		
		
		
		echo"<link rel='stylesheet' type='text/css' href='teste.css' />
				<div class='slideshow-container'>";
	
	
	if(isset($_SESSION['du'])){	
			if($_SESSION['du']){
				$padd = $controle->selecionarPadrao();
				if($padd != NULL){
					foreach($padd as $atual){
						echo"
						  <div class='mySlides fade'>";
							if(isset($_SESSION['iUm'])){	
							if($_SESSION['iUm']){
								echo"<img src='../controle/carrTres.php?id=4'>";
							}else{
								echo"<img src='../controle/carrTres.php?id=1'>";
							}
						}else{
								echo"<img src='../controle/carrTres.php?id=1'>";
							}
							echo"<div class='text' style='font-family: Louis George Cafe; font-size:18px;'>{$atual->getTextPadrao()}</div>
						  </div>
						  ";
						}
					   
				}else{
					echo "<h3>Nenhum registro armazenado.</h3>";
				}
			}else{			
					$tres = $controle->selecionarPidTresUm();
						if($tres != NULL){
							foreach($tres as $atual){
								echo"
									  <div class='mySlides fade'>";
									if(isset($_SESSION['iUm'])){	
										if($_SESSION['iUm']){
											echo"<img src='../controle/carrTres.php?id=4'>";
										}else{
											echo"<img src='../controle/carrTres.php?id=1'>";
										}
									}else{
										echo"<img src='../controle/carrTres.php?id=4'>";
									}
							echo"<div class='text' style='font-family: Louis George Cafe; font-size:18px;'>{$atual->getLegenda()}</div>
									  </div>
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
						  <div class='mySlides fade'>";
							if(isset($_SESSION['iUm'])){	
								if($_SESSION['iUm']){
									echo"<img src='../controle/carrTres.php?id=4'>";
								}else{
									echo"<img src='../controle/carrTres.php?id=1'>";
								}
							}else{
								echo"<img src='../controle/carrTres.php?id=4'>";
							}
							echo"<div class='text' style='font-family: Louis George Cafe; font-size:18px;'>{$atual->getTextPadrao()}</div>
						  </div>
						  ";
						}
					   
				}else{
					echo "<h3>Nenhum registro armazenado.</h3>";
				}
	
	}

		
	if(isset($_SESSION['dd'])){	
			if($_SESSION['dd']){
				$padd = $controle->selecionarPadrao();
				if($padd != NULL){
					foreach($padd as $atual){
						echo"
						  <div class='mySlides fade'>";
							if(isset($_SESSION['iDois'])){	
										if($_SESSION['iDois']){
											echo"<img src='../controle/carrTres.php?id=4'>";
										}else{
											echo"<img src='../controle/carrTres.php?id=2'>";
										}
									}else{
										echo"<img src='../controle/carrTres.php?id=4'>";
									}
							echo"<div class='text' style='font-family: Louis George Cafe; font-size:18px;'>{$atual->getTextPadrao()}</div>
						  </div>
						  ";
						}
					   
				}else{
					echo "<h3>Nenhum registro armazenado.</h3>";
				}
			}else{			
					$tres = $controle->selecionarPidTresDois();
						if($tres != NULL){
							foreach($tres as $atual){
								echo"
									  <div class='mySlides fade'>";
										if(isset($_SESSION['iDois'])){	
										if($_SESSION['iDois']){
											echo"<img src='../controle/carrTres.php?id=4'>";
										}else{
											echo"<img src='../controle/carrTres.php?id=2'>";
										}
									}else{
										echo"<img src='../controle/carrTres.php?id=4'>";
									}
										echo"<div class='text' style='font-family: Louis George Cafe; font-size:18px;'>{$atual->getLegenda()}</div>
									  </div>
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
						  <div class='mySlides fade'>";
							if(isset($_SESSION['iDois'])){	
										if($_SESSION['iDois']){
											echo"<img src='../controle/carrTres.php?id=4'>";
										}else{
											echo"<img src='../controle/carrTres.php?id=2'>";
										}
									}else{
										echo"<img src='../controle/carrTres.php?id=4'>";
									}
							echo"<div class='text' style='font-family: Louis George Cafe; font-size:18px;'>{$atual->getTextPadrao()}</div>
						  </div>
						  ";
						}
					   
				}else{
					echo "<h3>Nenhum registro armazenado.</h3>";
				}
	
	}
		
	if(isset($_SESSION['dt'])){	
			if($_SESSION['dt']){
				$padd = $controle->selecionarPadrao();
				if($padd != NULL){
					foreach($padd as $atual){
						echo"
						  <div class='mySlides fade'>";
							if(isset($_SESSION['iTres'])){	
										if($_SESSION['iTres']){
											echo"<img src='../controle/carrTres.php?id=4'>";
										}else{
											echo"<img src='../controle/carrTres.php?id=3'>";
										}
									}else{
										echo"<img src='../controle/carrTres.php?id=4'>";
									}
							echo"<div class='text' style='font-family: Louis George Cafe; font-size:18px;'>{$atual->getTextPadrao()}</div>
						  </div>
						  ";
						}     
				}else{
					echo "<h3>Nenhum registro armazenado.</h3>";
				}
			}else{			
					$tres = $controle->selecionarPidTresTres();
						if($tres != NULL){
							foreach($tres as $atual){
					echo"
						  <div class='mySlides fade'>";
							if(isset($_SESSION['iTres'])){	
										if($_SESSION['iTres']){
											echo"<img src='../controle/carrTres.php?id=4'>";
										}else{
											echo"<img src='../controle/carrTres.php?id=3'>";
										}
									}else{
										echo"<img src='../controle/carrTres.php?id=4'>";
									}
							echo"<div class='text' style='font-family: Louis George Cafe; font-size:18px;'>{$atual->getLegenda()}</div>
						  </div>
						";
					}
						}else{
							echo "<h3>Nenhum registro armazenado.</h3>";
						}	
			
			}
	}else{
	
		if($padd != NULL){
					foreach($padd as $atual){
						echo"
						  <div class='mySlides fade'>";
							if(isset($_SESSION['iTres'])){	
										if($_SESSION['iTres']){
											echo"<img src='../controle/carrTres.php?id=4'>";
										}else{
											echo"<img src='../controle/carrTres.php?id=3'>";
										}
									}else{
										echo"<img src='../controle/carrTres.php?id=4'>";
									}
							echo"<div class='text' style='font-family: Louis George Cafe; font-size:18px;'>{$atual->getTextPadrao()}</div>
						  </div>
						  ";
						}     
				}else{
					echo "<h3>Nenhum registro armazenado.</h3>";
				}  
	
	}
	
	
	
	
	
	
	echo"	
		  <!-- Next and previous buttons -->
		  <a class='prev' onclick='plusSlides(-1)'>&#10094;</a>
		  <a class='next' onclick='plusSlides(1)'>&#10095;</a>
		</div>
		<br>
		

		<!-- The dots/circles -->
		<div style='text-align:center'>
		  <span class='dot' onclick='currentSlide(1)'></span>
		  <span class='dot' onclick='currentSlide(2)'></span>
		  <span class='dot' onclick='currentSlide(3)'></span>
		</div>
		<script>
			var slideIndex = 1;
			showSlides(slideIndex);

			function plusSlides(n) {
			  showSlides(slideIndex += n);
			}

			function currentSlide(n) {
			  showSlides(slideIndex = n);
			}

			function showSlides(n) {
			  var i;
			  var slides = document.getElementsByClassName('mySlides');
			  var dots = document.getElementsByClassName('dot');
			  if (n > slides.length) {slideIndex = 1}    
			  if (n < 1) {slideIndex = slides.length}
			  for (i = 0; i < slides.length; i++) {
				  slides[i].style.display = 'none';  
			  }
			  for (i = 0; i < dots.length; i++) {
				  dots[i].className = dots[i].className.replace(' active', '');
			  }
			  slides[slideIndex-1].style.display = 'block';  
			  dots[slideIndex-1].className += ' active';
			}
	</script>
		";
    
		
		
		
    echo"
			<div class='row'>
		  <div class='column'>";
		  	if(isset($_SESSION['te'])){
			if($_SESSION['te']){
				$padd = $controle->selecionarPadrao();
				if($padd != NULL){
					foreach($padd as $atual){
						echo"
						 <link rel='stylesheet' type='text/css' href='teste.css' />
						 		<p style='margin-bottom:10px; text-align:center; font-size: 200%; color: #000; font-family: Louis George Cafe;'>{$atual->getTextPadrao()}</p>

						  ";
						}     
				}else{
					echo "<h3>Nenhum registro armazenado.</h3>";
				}
			}else{	  
				$quatro = $controle->selecionarPidQuatroUm();
				if($quatro != NULL){
					foreach($quatro as $atual){
						echo "<link rel='stylesheet' type='text/css' href='teste.css' />
						 		<p style='margin-bottom:10px; text-align:center; font-size: 200%; color: #000; font-family: Louis George Cafe;'>{$atual->getTextoQuatro()}</p>
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
						 <link rel='stylesheet' type='text/css' href='teste.css' />
								<p style='margin-bottom:10px; text-align:center; font-size: 200%; color: #000; font-family: Louis George Cafe;'>{$atual->getTextPadrao()}</p>
						  ";
						}     
				}else{
					echo "<h3>Nenhum registro armazenado.</h3>";
				}
    
    }
			echo"<img src='../controle/carrCinco.php?id=1' style='width:100%'>
		  </div>";
		  
	if(isset($_SESSION['iCen'])){
		if($_SESSION['iCen'] == False){
		  echo"
		  <div class='column'>";
		  	if(isset($_SESSION['tc'])){
			if($_SESSION['tc']){
				$padd = $controle->selecionarPadrao();
				if($padd != NULL){
					foreach($padd as $atual){
						echo"
						 <link rel='stylesheet' type='text/css' href='teste.css' />
						 		<p style='margin-bottom:10px; text-align:center; font-size: 200%; color: #000; font-family: Louis George Cafe;'>{$atual->getTextPadrao()}</p>
							
						  ";
						}     
				}else{
					echo "<h3>Nenhum registro armazenado.</h3>";
				}
				
			}else{	  
				$quatro = $controle->selecionarPidQuatroDois();
				if($quatro != NULL){
					foreach($quatro as $atual){
						echo "<link rel='stylesheet' type='text/css' href='teste.css' />
						 		<p style='margin-bottom:10px; text-align:center; font-size: 200%; color: #000; font-family: Louis George Cafe;'>{$atual->getTextoQuatro()}</p>
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
						 <link rel='stylesheet' type='text/css' href='teste.css' />
								<p style='margin-bottom:10px; text-align:center; font-size: 200%; color: #000; font-family: Louis George Cafe;'>{$atual->getTextPadrao()}</p>
						  ";
						}     
				}else{
					echo "<h3>Nenhum registro armazenado.</h3>";
				}
    
    }
			echo"<img src='../controle/carrCinco.php?id=2' style='width:100%'>
		  </div>";
		}
	}
	
	if(isset($_SESSION['iDir'])){
		if($_SESSION['iDir'] == False){  
		  echo"
		  <div class='column'>";
		  	if(isset($_SESSION['td'])){
			if($_SESSION['td']){
				$padd = $controle->selecionarPadrao();
				if($padd != NULL){
					foreach($padd as $atual){
						echo"
						 <link rel='stylesheet' type='text/css' href='teste.css' />
							 		<p style='margin-bottom:10px; text-align:center; font-size: 200%; color: #000; font-family: Louis George Cafe;'>{$atual->getTextPadrao()}</p>
						  ";
						}     
				}else{
					echo "<h3>Nenhum registro armazenado.</h3>";
				}
			}else{	
			
					$quatro = $controle->selecionarPidQuatroTres();
					if($quatro != NULL){
						foreach($quatro as $atual){
							echo "<link rel='stylesheet' type='text/css' href='teste.css' />
							 		<p style='margin-bottom:10px; text-align:center; font-size: 200%; color: #000; font-family: Louis George Cafe;'>{$atual->getTextoQuatro()}</p>
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
						 <link rel='stylesheet' type='text/css' href='teste.css' />
							 		<p style='margin-bottom:10px; text-align:center; font-size: 200%; color: #000; font-family: Louis George Cafe;'>{$atual->getTextPadrao()}</p>
						  ";
						}     
				}else{
					echo "<h3>Nenhum registro armazenado.</h3>";
				}
	
	}

			echo"<img src='../controle/carrCinco.php?id=3' style='width:100%'>
		  </div>";
		 }
	}
		
		
		echo"</div>";
    
    
    
    
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
