<?php
require_once("controle/solo.php");
$controle = new Solo();
session_start();
$dois = $controle->selecionarTodosDois();
$quatroUm = $controle->selecionarPidQuatroUm();
$quatroDois = $controle->selecionarPidQuatroDois();
$quatroTres = $controle->selecionarPidQuatroTres();
$seis = $controle->selecionarTodosSeis();
$tresUm = $controle->selecionarPidTresUm();
$tresDois = $controle->selecionarPidTresDois();
$tresTres = $controle->selecionarPidTresTres();
	echo "
	<!DOCTYPE html>
<html>
<head>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='need/bootstrap.min.css'>
  <script src='need/jquery.min.js'></script>
  <script src='need/bootstrap.min.js'></script>
<style>
		
		  .tpainel {
			font-size: 600%;
			 margin-top: 5%;
		  }
		  
		  @media screen and (max-width: 360px) and (min-width: 60px) {
			  .tpainel {
				font-size: 280%;
				margin-left: 8%;
				margin-right: 3%;
				padding-left: 10px;
				padding-right: 10px;
				width: 100%;
			  }
			  
			  div.blasa{
				margin-right: 10%;
				width: 80%;
				margin-top: 10%;
			  }
			  
			  div.lad{
			  	margin-top: 40%;
			  }
			  ul.dropdown-menu{
		  			width: 135%; 
		  			margin-left: -25px;
				}
		  }
		
		@media screen and (max-width: 550px) and (min-width: 361px) {
		  .tpainel {
			font-size: 300%;
			margin-left: 15%;
			margin-right: 15%;
			padding-left: 10px;
			padding-right: 10px;
			width: 100%;
		  }
		  
		  div.blasa{
			margin-right: 10%;
			width: 80%;
			margin-top: 10%;
		  }
		  div.lad{
		  	margin-top: 20%;
		  }
		  ul.dropdown-menu{
  			width: 120%; 
  			margin-left: -22px;
		  }
		}
		
		@media screen and (max-width: 805px)and (min-width: 551px) {
		  .tpainel {
			font-size: 400%;
			padding-left: 10px;
			padding-right: 10px;
			width: 100%;
		  }
		  
		  div.blasa{
			margin-right: 10%;
			width: 80%;
			margin-top: 5%;
				
		  }
		  div.lad{
		  	margin-top: 10%;
		  	margin-left: 10%;	
		  }
		  
		}
		
		@media screen and (max-width: 1090px)and (min-width: 806px) {
		  .tpainel {
			font-size: 600%;
			padding-left: 10px;
			padding-right: 10px;
			margin-left: 35%;
			margin-right: 35%;
			width: 100%;
		  }
		  
		  div.blasa{
			margin-right: 10%;
			margin-left: 10%;
			width: 80%;
			margin-top: 5%;
				
		  }
		  div.lad{
		  	margin-top: 0%;
		  	
		  }
		  
		}
		
		
	
		.dropdown-submenu {
		  position: relative;
		}

		.dropdown-submenu .dropdown-menu {
		  left: 0%;
		  margin-top: -1px;
		}
		.dropdown{
			margin-left: 10%; 
			margin-right: 10%;
		}
		.btnForm{
			margin-right: 40%;
			margin-top: 3%;
		}
		.blasa{
			background-color: white;
			margin-top: 11%;
			padding-top: 5%;
			margin-right: 2%;
			padding-bottom: 3%;
			float: right;
			width: 50%;
		}
		
		.dropdown-submenu{
			margin-top: 5px;
		}
		.test{
			margin-top: 5px;
			font-size: 110%;
			height: 40px;
		}
		#myBtn {
		  width: 115px;
		  font-size: 18px;
		  padding: 10px;
		  border: none;
		  background: #2DA683;
		  cursor: pointer;
		  text-decoration: none;
		  font-family:Duldolar;
		}
		
		.btnForm a{
		  color: #fff;
		  text-decoration: none;
		}

		#myBtn:hover {
		  background: #9fe5d1;
		  color: black;
		}
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
		
		.bg_video{
			position: fixed; 
			right: 0; 
			bottom: 0;
			min-width: 100%; 
			min-height: 100%;
			width: auto; 
			height: auto; 
			z-index: -1000;
			background: url(preto.jpg) no-repeat;
			background-size: cover; 
		}
		.body{
			padding:20px;
			background: rgba(255,255,255,0.9);
			margin: 30% auto 20px auto;
			max-width: 960px;
			border-radius: 10px;

		}
		.lad{
			margin-top: 14%;
			margin-left: 2%;
			float: left;
		}
		.dropdown-menu{
		  	width: 100%; 
		}
  </style>
</head>
<body>
<video autoplay='autoplay' loop class='bg_video'>
			<source src='videos/Organic.webm' type='video/webm'>
			<source src='videos/Organic.mp4' type='video/mp4'>
		</video>	
		
		<div class='lad'>
	<h1 style='text-align: center; font-family:Ice Mirror in Winter Kei; margin-bottom: 3%; color: white; text-shadow: 2px 2px #000000; background-color: #2DA683;' class='tpainel'>Painel de</h1>
	
	
	<h1 style='text-align: center; font-family:Ice Mirror in Winter Kei; margin-bottom: 3%; color: white; text-shadow: 2px 2px #000000; background-color: #2DA683;' class='tpainel'>Controle</h1>
	</div>
	
	<div class='blasa'>
";



		

			
			echo"  
			<div class='dropdown'>
			<button class='btn btn-default dropdown-toggle' type='button' data-toggle='dropdown' 
			style='
				  width: 100%;
				  backgrond-color: white;
				  height: 60px;
				  font-size: 150%;
				  font-family:Duldolar;
				  letter-spacing: 2px;
			'>Criar
			
			
			
			<span class='caret'></span></button>
				<ul class='dropdown-menu'
			style='
				text-align: center;
				font-size: 110%;
				font-family:galyon;
				letter-spacing: 2px;

			'>
			";		 
		 
			if(isset($_SESSION['il'])){
				if($_SESSION['il'] == true){ 
					echo"
						  <li class='dropdown-submenu'>
					<a class='test' tabindex='-1' href='#'>Logo <span class='caret'></span></a>
					<ul class='dropdown-menu' 
					style='
						margin-left: 1px;
						margin-left: 1px;
						width: 100%; 
						text-align: center;
					'>
				
				
				
					  <li>
						  <form action='updateImageDivUm.php' method='post' enctype='multipart/form-data'>
								<input type='file' name='upload' />
								<input type='submit' value='Editar' /> 
						  </form>
					  </li>
					</ul>
					";    
				}
			}else{
			
				echo"
						  <li class='dropdown-submenu'>
					<a class='test' tabindex='-1' href='#'>Logo <span class='caret'></span></a>
					<ul class='dropdown-menu' 
					style='
						margin-left: 1px;
						margin-left: 1px;
						width: 100%; 
						text-align: center;
					'>
				
				
				
					  <li>
						  <form action='updateImageDivUm.php' method='post' enctype='multipart/form-data'>
								<input type='file' name='upload' />
								<input type='submit' value='Editar' /> 
						  </form>
					  </li>
					</ul>
					"; 
			
			}	
		
		if(isset($_SESSION['tp'])){	
				if($_SESSION['tp'] == True){			
					echo"	    
							 <li class='dropdown-submenu' style=' margin-top: 10px;'>
					<a class='test' tabindex='-1' href='#' style='height: 40px; margin-top: -8px;'>Texto Principal <span class='caret'></span></a>
					<ul class='dropdown-menu' 
					style='
						margin-left: 1px;
						margin-left: 1px;
						width: 100%; 
						text-align: center;
					'>
					
					
					
					  <li>";      		      
							if($dois != NULL){
								foreach($dois as $atual){
									echo "<form action='editDois.php' method='post'>
										<input type='text' name='nome' id='nome' value='{$atual->getTextoDois()}' required />
										<br />
										<input type='submit' value='Editar' />
									</form>";
								}
							}else{
								echo "<h3>Nenhum registro armazenado.</h3>";
							}
								  echo "</li>
								</ul>
								
							 ";   
				}	    
			}else{
			
				echo"	    
							 <li class='dropdown-submenu' style=' margin-top: 10px;'>
					<a class='test' tabindex='-1' href='#' style='height: 40px; margin-top: -8px;'>Texto Principal <span class='caret'></span></a>
					<ul class='dropdown-menu' 
					style='
						margin-left: 1px;
						margin-left: 1px;
						width: 100%; 
						text-align: center;
					'>
					
					
					
					  <li>";      		      
							if($dois != NULL){
								foreach($dois as $atual){
									echo "<form action='editDois.php' method='post'>
										<input type='text' name='nome' id='nome' value='{$atual->getTextoDois()}' required />
										<br />
										<input type='submit' value='Editar' />
									</form>";
								}
							}else{
								echo "<h3>Nenhum registro armazenado.</h3>";
							}
								  echo "</li>
								</ul>
								
							 ";
			
			}
			
			
			if(isset($_SESSION['iUm'])){	
				if($_SESSION['iUm'] == True){	    
					  echo"  
						<li class='dropdown-submenu'>
					<a class='test' tabindex='-1' href='#' style='height: 40px;'>Imagem 1 do slide <span class='caret'></span></a>
					<ul class='dropdown-menu' 
					style='
						margin-left: 1px;
						width: 100%; 
						text-align: center;
					'>
					
					
					
					  <li>
						  <form action='updateImageDivTresUm.php' method='post' enctype='multipart/form-data'>
								<input type='file' name='upload' />
								<input type='submit' value='Editar' /> 
						  </form>
					  </li>
					</ul>

					   "; 
						
				}	    
			}else{
			
				echo"  
						<li class='dropdown-submenu'>
					<a class='test' tabindex='-1' href='#' style='height: 40px;'>Imagem 1 do slide <span class='caret'></span></a>
					<ul class='dropdown-menu' 
					style='
						margin-left: 1px;
						width: 100%; 
						text-align: center;
					'>
					
					
					
					  <li>
						  <form action='updateImageDivTresUm.php' method='post' enctype='multipart/form-data'>
								<input type='file' name='upload' />
								<input type='submit' value='Editar' /> 
						  </form>
					  </li>
					</ul>

					   "; 
			
			}
			
			if(isset($_SESSION['iDois'])){	
				if($_SESSION['iDois'] == True){	    
					   echo" 
						<li class='dropdown-submenu'>
						<li class='dropdown-submenu'>
					<a class='test' tabindex='-1' href='#' style='height: 40px;'>Imagem 2 do slide <span class='caret'></span></a>
					<ul class='dropdown-menu' 
					style='
						margin-left: 1px;
						width: 100%; 
						text-align: center;
					'>
					
					
					
					 <li>
						  <form action='updateImageDivTresDois.php' method='post' enctype='multipart/form-data'>
								<input type='file' name='upload' />
								<input type='submit' value='Editar' /> 
						  </form>
					  </li>
					</ul>
						";
				}	    
			}else{
			
				echo" 
						<li class='dropdown-submenu'>
						<li class='dropdown-submenu'>
					<a class='test' tabindex='-1' href='#' style='height: 40px;'>Imagem 2 do slide <span class='caret'></span></a>
					<ul class='dropdown-menu' 
					style='
						margin-left: 1px;
						width: 100%; 
						text-align: center;
					'>
					
					
					
					 <li>
						  <form action='updateImageDivTresDois.php' method='post' enctype='multipart/form-data'>
								<input type='file' name='upload' />
								<input type='submit' value='Editar' /> 
						  </form>
					  </li>
					</ul>
						";
			
			}
			
			if(isset($_SESSION['iTres'])){		
				if($_SESSION['iTres'] == True){	    
						echo" 
						<li class='dropdown-submenu'>
					<a class='test' tabindex='-1' href='#' style='height: 40px;'>Imagem 3 do slide <span class='caret'></span></a>
					<ul class='dropdown-menu' 
					style='
						margin-left: 1px;
						width: 100%; 
						text-align: center;
					'>
					
					
					
					  <li>
						  <form action='updateImageDivTresTres.php' method='post' enctype='multipart/form-data'>
								<input type='file' name='upload' />
								<input type='submit' value='Editar' /> 
						  </form>
					  </li>
					</ul>
					";
				}
	}else{
	
		echo" 
						<li class='dropdown-submenu'>
					<a class='test' tabindex='-1' href='#' style='height: 40px;'>Imagem 3 do slide <span class='caret'></span></a>
					<ul class='dropdown-menu' 
					style='
						margin-left: 1px;
						width: 100%; 
						text-align: center;
					'>
					
					
					
					  <li>
						  <form action='updateImageDivTresTres.php' method='post' enctype='multipart/form-data'>
								<input type='file' name='upload' />
								<input type='submit' value='Editar' /> 
						  </form>
					  </li>
					</ul>
					";
	
	}
	
	if(isset($_SESSION['du'])){		
			if($_SESSION['du'] == True){
					echo" 
					<li class='dropdown-submenu'>
				<a class='test' tabindex='-1' href='#' style='height: 40px;'>Descrição 1 do slide <span class='caret'></span></a>
				<ul class='dropdown-menu' 
				style='
					margin-left: 1px;
					width: 100%; 
					text-align: center;
				'>
				  <li>";
					if($tresUm != NULL){
						foreach($tresUm as $atual){
							echo "<form action='editTresUm.php' method='post'>
								<input type='text' name='nome' id='nome' value='{$atual->getLegenda()}' required />
								<br />
								<input type='submit' value='Editar' />
							</form>";
						}
					}else{
						echo "<h3>Nenhum registro armazenado.</h3>";
					}
							  echo"</li>
							</ul>
						
				";	    
			}			
		}else{
		
			echo" 
					<li class='dropdown-submenu'>
				<a class='test' tabindex='-1' href='#' style='height: 40px;'>Descrição 1 do slide <span class='caret'></span></a>
				<ul class='dropdown-menu' 
				style='
					margin-left: 1px;
					width: 100%; 
					text-align: center;
				'>
				  <li>";
					if($tresUm != NULL){
						foreach($tresUm as $atual){
							echo "<form action='editTresUm.php' method='post'>
								<input type='text' name='nome' id='nome' value='{$atual->getLegenda()}' required />
								<br />
								<input type='submit' value='Editar' />
							</form>";
						}
					}else{
						echo "<h3>Nenhum registro armazenado.</h3>";
					}
							  echo"</li>
							</ul>
						
				";	  
		
		}
		
		
		if(isset($_SESSION['dd'])){			
			if($_SESSION['dd'] == True){				
				echo"	    
						<li class='dropdown-submenu'>
				<a class='test' tabindex='-1' href='#' style='height: 40px;'>Descrição 2 do slide <span class='caret'></span></a>
				<ul class='dropdown-menu' 
				style='
					margin-left: 1px;
					width: 100%; 
					text-align: center;
				'>
				
				
				
				  <li>";
						if($tresDois != NULL){
							foreach($tresDois as $atual){
								echo "<form action='editTresDois.php' method='post'>
									<input type='text' name='nome' id='nome' value='{$atual->getLegenda()}' required />
									<br />
									<input type='submit' value='Editar' />
								</form>";
							}
						}else{
							echo "<h3>Nenhum registro armazenado.</h3>";
						}
								  echo "</li>
				</ul>
					";    
			}	
		}else{
		
			echo"	    
						<li class='dropdown-submenu'>
				<a class='test' tabindex='-1' href='#' style='height: 40px;'>Descrição 2 do slide <span class='caret'></span></a>
				<ul class='dropdown-menu' 
				style='
					margin-left: 1px;
					width: 100%; 
					text-align: center;
				'>
				
				
				
				  <li>";
						if($tresDois != NULL){
							foreach($tresDois as $atual){
								echo "<form action='editTresDois.php' method='post'>
									<input type='text' name='nome' id='nome' value='{$atual->getLegenda()}' required />
									<br />
									<input type='submit' value='Editar' />
								</form>";
							}
						}else{
							echo "<h3>Nenhum registro armazenado.</h3>";
						}
								  echo "</li>
				</ul>
					";  
		
		}		
					
					
		if(isset($_SESSION['dt'])){	
			if($_SESSION['dt'] == True){			
					 echo"    
					   <li class='dropdown-submenu'>
				<a class='test' tabindex='-1' href='#' style='height: 40px;'>Descrição 3 do slide <span class='caret'></span></a>
				<ul class='dropdown-menu' 
				style='
					margin-left: 1px;
					width: 100%; 
					text-align: center;
				'>
				
				
				
				  <li>";
						if($tresTres != NULL){
							foreach($tresTres as $atual){
								echo "<form action='editTresTres.php' method='post'>
									<input type='text' name='nome' id='nome' value='{$atual->getLegenda()}' required />
									<br />
									<input type='submit' value='Editar' />
								</form>";
							}
						}else{
							echo "<h3>Nenhum registro armazenado.</h3>";
						}
								  echo"</li>
								</ul>
					 ";   
			}	
		}else{
		
			echo"    
					   <li class='dropdown-submenu'>
				<a class='test' tabindex='-1' href='#' style='height: 40px;'>Descrição 3 do slide <span class='caret'></span></a>
				<ul class='dropdown-menu' 
				style='
					margin-left: 1px;
					width: 100%; 
					text-align: center;
				'>
				
				
				
				  <li>";
						if($tresTres != NULL){
							foreach($tresTres as $atual){
								echo "<form action='editTresTres.php' method='post'>
									<input type='text' name='nome' id='nome' value='{$atual->getLegenda()}' required />
									<br />
									<input type='submit' value='Editar' />
								</form>";
							}
						}else{
							echo "<h3>Nenhum registro armazenado.</h3>";
						}
								  echo"</li>
								</ul>
					 ";   
		
		}
		
				
		if(isset($_SESSION['te'])){							
			if($_SESSION['te'] == True){			
					  echo"  
						<li class='dropdown-submenu'>
				<a class='test' tabindex='-1' href='#' style='height: 40px;'>Texto a esquerda <span class='caret'></span></a>
				<ul class='dropdown-menu' 
				style='
					margin-left: 1px;
					width: 100%; 
					text-align: center;
				'>
				
				
				
				  <li>";
						if($quatroUm != NULL){
							foreach($quatroUm as $atual){
								echo "<form action='editQuatroUm.php' method='post'>
									<input type='text' name='nome' id='nome' value='{$atual->getTextoQuatro()}' required />
									<br />
									<input type='submit' value='Editar' />
								</form>";
							}
						}else{
							echo "<h3>Nenhum registro armazenado.</h3>";
						}

							echo"</li>
							</ul>
				   "; 
			}
		}else{
		
			echo"  
						<li class='dropdown-submenu'>
				<a class='test' tabindex='-1' href='#' style='height: 40px;'>Texto a esquerda <span class='caret'></span></a>
				<ul class='dropdown-menu' 
				style='
					margin-left: 1px;
					width: 100%; 
					text-align: center;
				'>
				
				
				
				  <li>";
						if($quatroUm != NULL){
							foreach($quatroUm as $atual){
								echo "<form action='editQuatroUm.php' method='post'>
									<input type='text' name='nome' id='nome' value='{$atual->getTextoQuatro()}' required />
									<br />
									<input type='submit' value='Editar' />
								</form>";
							}
						}else{
							echo "<h3>Nenhum registro armazenado.</h3>";
						}

							echo"</li>
							</ul>
				   "; 
		
		}	    
		
		if(isset($_SESSION['iEsq'])){				
			if($_SESSION['iEsq'] == True){		    
					echo"
					<li class='dropdown-submenu'>
				<a class='test' tabindex='-1' href='#' style='height: 40px;'>Imagem a esquerda <span class='caret'></span></a>
				<ul class='dropdown-menu' 
				style='
					margin-left: 1px;
					width: 100%; 
					text-align: center;
				'>
				
				
				
				  <li>
					  <form action='updateImageUm.php' method='post' enctype='multipart/form-data'>
							<input type='file' name='upload' />
							<input type='submit' value='Editar' /> 
					  </form>
				  </li>
				</ul>
				   "; 
			}	    
		}else{
		
			echo"
					<li class='dropdown-submenu'>
				<a class='test' tabindex='-1' href='#' style='height: 40px;'>Imagem a esquerda <span class='caret'></span></a>
				<ul class='dropdown-menu' 
				style='
					margin-left: 1px;
					width: 100%; 
					text-align: center;
				'>
				
				
				
				  <li>
					  <form action='updateImageUm.php' method='post' enctype='multipart/form-data'>
							<input type='file' name='upload' />
							<input type='submit' value='Editar' /> 
					  </form>
				  </li>
				</ul>
				   "; 
		
		}
		
		
		if(isset($_SESSION['iCen']) and $_SESSION['iCen'] == False){
		if(isset($_SESSION['tc'])){				
					if($_SESSION['tc'] == True){	    
							echo"  
								<li class='dropdown-submenu'>
						<a class='test' tabindex='-1' href='#' style='height: 40px;'>Texto Central <span class='caret'></span></a>
						<ul class='dropdown-menu' 
						style='
							margin-left: 1px;
							width: 100%; 
							text-align: center;
						'>
						
						
						
						  <li>";
								if($quatroDois != NULL){
									foreach($quatroDois as $atual){
										echo "<form action='editQuatroDois.php' method='post'>
											<input type='text' name='nome' id='nome' value='{$atual->getTextoQuatro()}' required />
											<br />
											<input type='submit' value='Editar' />
										</form>";
									}
								}else{
									echo "<h3>Nenhum registro armazenado.</h3>";
								}

									echo"</li>
									</ul>
						   "; 
					}
				}else{
				
					echo"  
								<li class='dropdown-submenu'>
						<a class='test' tabindex='-1' href='#' style='height: 40px;'>Texto Central <span class='caret'></span></a>
						<ul class='dropdown-menu' 
						style='
							margin-left: 1px;
							width: 100%; 
							text-align: center;
						'>
						
						
						
						  <li>";
								if($quatroDois != NULL){
									foreach($quatroDois as $atual){
										echo "<form action='editQuatroDois.php' method='post'>
											<input type='text' name='nome' id='nome' value='{$atual->getTextoQuatro()}' required />
											<br />
											<input type='submit' value='Editar' />
										</form>";
									}
								}else{
									echo "<h3>Ne.</h3>";
								}

									echo"</li>
									</ul>
						   "; 
				
				}	    
				
		}						
	    
				
				
				if(isset($_SESSION['iCen'])){					
					if($_SESSION['iCen'] == True){			
							 echo"    
								<li class='dropdown-submenu'>
						<a class='test' tabindex='-1' href='#' style='height: 40px;'>Imagem Central <span class='caret'></span></a>
						<ul class='dropdown-menu' 
						style='
							margin-left: 1px;
							width: 100%; 
							text-align: center;
						'>
						
						
						
						  <li>
							  <form action='updateImageDois.php' method='post' enctype='multipart/form-data'>
									<input type='file' name='upload' />
									<input type='submit' value='Editar' /> 
							  </form>
						  </li>
						</ul>
							   "; 
					}	
				}else{
				
					echo"    
								<li class='dropdown-submenu'>
						<a class='test' tabindex='-1' href='#' style='height: 40px;'>Imagem Central<span class='caret'></span></a>
						<ul class='dropdown-menu' 
						style='
							margin-left: 1px;
							width: 100%; 
							text-align: center;
						'>
						
						
						
						  <li>
							  <form action='updateImageDois.php' method='post' enctype='multipart/form-data'>
									<input type='file' name='upload' />
									<input type='submit' value='Editar' /> 
							  </form>
						  </li>
						</ul>
							   ";
				
				}
				
				
			if(isset($_SESSION['iCen']) and $_SESSION['iCen'] == False){	
				if(isset($_SESSION['tc']) and $_SESSION['tc'] == False){
					if(isset($_SESSION['td'])){				
						if($_SESSION['td'] == True){	    
								echo" 
								<li class='dropdown-submenu'>
							<a class='test' tabindex='-1' href='#' style='height: 40px;'>Texto a Direita <span class='caret'></span></a>
							<ul class='dropdown-menu' 
							style='
								margin-left: 1px;
								width: 100%; 
								text-align: center;
							'>
							
							
							
							  <li>";
								if($quatroTres != NULL){
									foreach($quatroTres as $atual){
										echo "<form action='editQuatroTres.php' method='post'>
											<input type='text' name='nome' id='nome' value='{$atual->getTextoQuatro()}' required />
											<br />
											<input type='submit' value='Editar' />
										</form>";
									}
								}else{
									echo "<h3>Nenhum registro armazenado.</h3>";
								}					
										echo "</li>
										</ul>
								   "; 
						}	
					}else{
					
						echo" 
								<li class='dropdown-submenu'>
							<a class='test' tabindex='-1' href='#' style='height: 40px;'>Texto a Direita <span class='caret'></span></a>
							<ul class='dropdown-menu' 
							style='
								margin-left: 1px;
								width: 100%; 
								text-align: center;
							'>
							
							
							
							  <li>";
								if($quatroTres != NULL){
									foreach($quatroTres as $atual){
										echo "<form action='editQuatroTres.php' method='post'>
											<input type='text' name='nome' id='nome' value='{$atual->getTextoQuatro()}' required />
											<br />
											<input type='submit' value='Editar' />
										</form>";
									}
								}else{
									echo "<h3>Nenhum registro armazenado.</h3>";
								}					
										echo "</li>
										</ul>
								   ";
					
					}
				}

						if(isset($_SESSION['iDir'])){					
							if($_SESSION['iDir'] == True){			
									 echo"    
										<li class='dropdown-submenu'>
								<a class='test' tabindex='-1' href='#' style='height: 40px;'>Imagem a Direita <span class='caret'></span></a>
								<ul class='dropdown-menu' 
								style='
									margin-left: 1px;
									width: 100%; 
									text-align: center;
								'>
								
								
								
								  <li>
									  <form action='updateImageTres.php' method='post' enctype='multipart/form-data'>
											<input type='file' name='upload' />
											<input type='submit' value='Editar' /> 
									  </form>
								  </li>
								</ul>
									   "; 
							}	
						}else{
						
							echo"    
										<li class='dropdown-submenu'>
								<a class='test' tabindex='-1' href='#' style='height: 40px;'>Imagem a Direita <span class='caret'></span></a>
								<ul class='dropdown-menu' 
								style='
									margin-left: 1px;
									width: 100%; 
									text-align: center;
								'>
								
								
								
								  <li>
									  <form action='updateImageTres.php' method='post' enctype='multipart/form-data'>
											<input type='file' name='upload' />
											<input type='submit' value='Editar' /> 
									  </form>
								  </li>
								</ul>
									   ";
						
						}
					}
				
		if(isset($_SESSION['em']) or isset($_SESSION['ts'])){					
			if($_SESSION['em'] == True or $_SESSION['ts'] == True){				
					   echo"  
						<li class='dropdown-submenu'>
				<a class='test' tabindex='-1' href='#' style='height: 40px;'>Email e Sobre <span class='caret'></span></a>
				<ul class='dropdown-menu' 
				style='
					margin-left: 1px;
					width: 100%; 
					text-align: center;
				'>
				
				
				
				  <li>";
						if($seis != NULL){
							foreach($seis as $atual){
								echo "<form action='editSeis.php' method='post'>
									<input type='text' name='email' id='email' value='{$atual->getEmail()}' required />
									<br />
									<input type='text' name='nome' id='nome' value='{$atual->getTextoSeis()}' required />
									<br />
									<input type='submit' value='Editar' />
								</form>";
							}
						}else{
							echo "<h3>Nenhum registro armazenado.</h3>";
						}
									echo"</li>
								</ul> 
							  </li>";
							  }
					}else{
					
						echo"  
						<li class='dropdown-submenu'>
				<a class='test' tabindex='-1' href='#' style='height: 40px;'>Email e Sobre <span class='caret'></span></a>
				<ul class='dropdown-menu' 
				style='
					margin-left: 1px;
					width: 100%; 
					text-align: center;
				'>
				
				
				
				  <li>";
						if($seis != NULL){
							foreach($seis as $atual){
								echo "<form action='editSeis.php' method='post'>
									<input type='text' name='email' id='email' value='{$atual->getEmail()}' required />
									<br />
									<input type='text' name='nome' id='nome' value='{$atual->getTextoSeis()}' required />
									<br />
									<input type='submit' value='Editar' />
								</form>";
							}
						}else{
							echo "<h3>Nenhum registro armazenado.</h3>";
						}
									echo"</li>
								</ul> 
							  </li>";
					
					}
					  
			echo"		  
					</ul>
				  </div>
				";
		

if(isset($_SESSION['il']) or isset($_SESSION['tp']) or isset($_SESSION['du']) or isset($_SESSION['dd']) or isset($_SESSION['dt']) or isset($_SESSION['te']) or isset($_SESSION['td']) or isset($_SESSION['em']) or isset($_SESSION['ts']) or isset($_SESSION['iUm']) or isset($_SESSION['iDois']) or isset($_SESSION['iTres']) or isset($_SESSION['iEsq']) or isset($_SESSION['iCen'])){
	
			
				echo"
			  <div class='dropdown'>
			<button class='btn btn-default dropdown-toggle' type='button' data-toggle='dropdown' 
			style='
				  width: 100%;
				  backgrond-color: white;
				  height: 60px;
				  font-size: 150%;
				  font-family:Duldolar;
				  letter-spacing: 2px;
			'>Editar ";
			
			
			echo"<span class='caret'></span></button>
			<ul class='dropdown-menu' 
			style='
				text-align: center;
				font-size: 110%;
				font-family:galyon;
				letter-spacing: 2px;
			'>
				";
				
		if(isset($_SESSION['il'])){
				if($_SESSION['il'] == False){	
					echo" 
					  <li class='dropdown-submenu'>
				<a class='test' tabindex='-1' href='#'>Logo <span class='caret'></span></a>
				<ul class='dropdown-menu' 
				style='
					margin-left: 1px;
					width: 100%; 
					text-align: center;
				'>
				
				
				
				  <li>
					  <form action='updateImageDivUm.php' method='post' enctype='multipart/form-data'>
							<input type='file' name='upload' />
							<input type='submit' value='Editar' /> 
					  </form>
				  </li>
				</ul>
					  ";  
				}		
			}
			
		if(isset($_SESSION['tp'])){
				if($_SESSION['tp'] == False){			
					 echo"    
						<li class='dropdown-submenu' style=' margin-top: 10px;'>
				<a class='test' tabindex='-1' href='#' style='height: 40px; margin-top: -5px;'>Texto Principal <span class='caret'></span></a>
				<ul class='dropdown-menu' 
				style='
					margin-left: 1px;
					width: 100%; 
					text-align: center;
				'>
				
				
				
				  <li>";
						if($dois != NULL){
							foreach($dois as $atual){
								echo "<form action='editDois.php' method='post'>
									<input type='text' name='nome' id='nome' value='{$atual->getTextoDois()}' required />
									<br />
									<input type='submit' value='Editar' />
								</form>";
							}
						}else{
							echo "<h3>Nenhum registro armazenado.</h3>";
						}
							  echo "</li>
							</ul>
					";
				}    
			}
			
			if(isset($_SESSION['iUm'])){	
				if($_SESSION['iUm'] == False){    
					echo" 
					<li class='dropdown-submenu'>
				<a class='test' tabindex='-1' href='#' style='height: 40px;'>Imagem 1 do slide <span class='caret'></span></a>
				<ul class='dropdown-menu' 
				style='
					margin-left: 1px;
					width: 100%; 
					text-align: center;
				'>
				
				
				
				  <li>
					  <form action='updateImageDivTresUm.php' method='post' enctype='multipart/form-data'>
							<input type='file' name='upload' />
							<input type='submit' value='Editar' /> 
					  </form>
				  </li>
				</ul>
					";
				}    
			}
			
			if(isset($_SESSION['iDois'])){		
				if($_SESSION['iDois'] == False){    
					echo" 
					<li class='dropdown-submenu'>
				<a class='test' tabindex='-1' href='#' style='height: 40px;'>Imagem 2 do slide <span class='caret'></span></a>
				<ul class='dropdown-menu' 
				style='
					margin-left: 1px;
					width: 100%; 
					text-align: center;
				'>
				
				
				
				 <li>
					  <form action='updateImageDivTresDois.php' method='post' enctype='multipart/form-data'>
							<input type='file' name='upload' />
							<input type='submit' value='Editar' /> 
					  </form>
				  </li>
				</ul>
					";
				}    
			}
			
			if(isset($_SESSION['iTres'])){
				if($_SESSION['iTres'] == False){   
				   echo"  
					<li class='dropdown-submenu'>
				<a class='test' tabindex='-1' href='#' style='height: 40px;'>Imagem 3 do slide <span class='caret'></span></a>
				<ul class='dropdown-menu' 
				style='
					margin-left: 1px;
					width: 100%; 
					text-align: center;
				'>
				
				
				
				  <li>
					  <form action='updateImageDivTresTres.php' method='post' enctype='multipart/form-data'>
							<input type='file' name='upload' />
							<input type='submit' value='Editar' /> 
					  </form>
				  </li>
				</ul>
					";
				}
			}
			
			if(isset($_SESSION['du'])){
				if($_SESSION['du'] == False){
					echo" 
					<li class='dropdown-submenu'>
				<a class='test' tabindex='-1' href='#' style='height: 40px;'>Descrição 1 do slide <span class='caret'></span></a>
				<ul class='dropdown-menu' 
				style='
					margin-left: 1px;
					width: 100%; 
					text-align: center;
				'>
				  <li>";
					if($tresUm != NULL){
						foreach($tresUm as $atual){
							echo "<form action='editTresUm.php' method='post'>
								<input type='text' name='nome' id='nome' value='{$atual->getLegenda()}' required />
								<br />
								<input type='submit' value='Editar' />
							</form>";
						}
					}else{
						echo "<h3>Nenhum registro armazenado.</h3>";
					}
							  echo"</li>
							</ul>
					 ";   
				}		
			}
			
			if(isset($_SESSION['dd'])){
				if($_SESSION['dd'] == False){		
					   echo"  
						<li class='dropdown-submenu'>
				<a class='test' tabindex='-1' href='#' style='height: 40px;'>Descrição 2 do slide <span class='caret'></span></a>
				<ul class='dropdown-menu' 
				style='
					margin-left: 1px;
					width: 100%; 
					text-align: center;
				'>
				
				
				
				  <li>";
						if($tresDois != NULL){
							foreach($tresDois as $atual){
								echo "<form action='editTresDois.php' method='post'>
									<input type='text' name='nome' id='nome' value='{$atual->getLegenda()}' required />
									<br />
									<input type='submit' value='Editar' />
								</form>";
							}
						}else{
							echo "<h3>Nenhum registro armazenado.</h3>";
						}
								  echo "</li>
								</ul>
					   "; 
				}		
			}
			if(isset($_SESSION['dt'])){
				if($_SESSION['dt'] == False){		
						echo" 
					   <li class='dropdown-submenu'>
				<a class='test' tabindex='-1' href='#' style='height: 40px;'>Descrição 3 do slide <span class='caret'></span></a>
				<ul class='dropdown-menu' 
				style='
					margin-left: 1px;
					width: 100%; 
					text-align: center;
				'>
				
				
				
				  <li>";
						if($tresTres != NULL){
							foreach($tresTres as $atual){
								echo "<form action='editTresTres.php' method='post'>
									<input type='text' name='nome' id='nome' value='{$atual->getLegenda()}' required />
									<br />
									<input type='submit' value='Editar' />
								</form>";
							}
						}else{
							echo "<h3>Nenhum registro armazenado.</h3>";
						}
								  echo"</li>
								</ul>
					   "; 
				}		
			}
			
			if(isset($_SESSION['te'])){
				if($_SESSION['te'] == False){		
						echo" 
						<li class='dropdown-submenu'>
				<a class='test' tabindex='-1' href='#' style='height: 40px;'>Texto a esquerda <span class='caret'></span></a>
				<ul class='dropdown-menu' 
				style='
					margin-left: 1px;
					width: 100%; 
					text-align: center;
				'>
				
				
				
				  <li>";
						if($quatroUm != NULL){
							foreach($quatroUm as $atual){
								echo "<form action='editQuatroUm.php' method='post'>
									<input type='text' name='nome' id='nome' value='{$atual->getTextoQuatro()}' required />
									<br />
									<input type='submit' value='Editar' />
								</form>";
							}
						}else{
							echo "<h3>Nenhum registro armazenado.</h3>";
						}

							echo"</li>
							</ul>
						   "; 
				}  
			}
			  
			if(isset($_SESSION['iEsq'])){		
				if($_SESSION['iEsq'] == False){    
					echo" 
					<li class='dropdown-submenu'>
				<a class='test' tabindex='-1' href='#' style='height: 40px;'>Imagem a esquerda <span class='caret'></span></a>
				<ul class='dropdown-menu' 
				style='
					margin-left: 1px;
					width: 100%; 
					text-align: center;
				'>
				
				
				
				  <li>
					  <form action='updateImageUm.php' method='post' enctype='multipart/form-data'>
							<input type='file' name='upload' />
							<input type='submit' value='Editar' /> 
					  </form>
				  </li>
				</ul>
					";
				}    
			}
			
			
			
			if(isset($_SESSION['tc'])){
				if($_SESSION['tc'] == False){		
						echo" 
						<li class='dropdown-submenu'>
				<a class='test' tabindex='-1' href='#' style='height: 40px;'>Texto Central <span class='caret'></span></a>
				<ul class='dropdown-menu' 
				style='
					margin-left: 1px;
					width: 100%; 
					text-align: center;
				'>
				
				
				
				  <li>";
						if($quatroDois != NULL){
							foreach($quatroDois as $atual){
								echo "<form action='editQuatroDois.php' method='post'>
									<input type='text' name='nome' id='nome' value='{$atual->getTextoQuatro()}' required />
									<br />
									<input type='submit' value='Editar' />
								</form>";
							}
						}else{
							echo "<h3>Nenhum registro armazenado.</h3>";
						}

							echo"</li>
							</ul>
						   "; 
				}  
			}
			
			
			
			if(isset($_SESSION['iCen'])){			
				if($_SESSION['iCen'] == False){		
						echo" 
						<li class='dropdown-submenu'>
				<a class='test' tabindex='-1' href='#' style='height: 40px;'>Imagem Central <span class='caret'></span></a>
				<ul class='dropdown-menu' 
				style='
					margin-left: 1px;
					width: 100%; 
					text-align: center;
				'>
				
				
				
				  <li>
					  <form action='updateImageDois.php' method='post' enctype='multipart/form-data'>
							<input type='file' name='upload' />
							<input type='submit' value='Editar' /> 
					  </form>
				  </li>
				</ul>
						";
				}		
			}
			
			
			
			
			if(isset($_SESSION['td'])){		
				if($_SESSION['td'] == False){    
					echo" 
					<li class='dropdown-submenu'>
				<a class='test' tabindex='-1' href='#' style='height: 40px;'>Texto a Direita <span class='caret'></span></a>
				<ul class='dropdown-menu' 
				style='
					margin-left: 1px;
					width: 100%; 
					text-align: center;
				'>
				
				
				
				  <li>";
					if($quatroTres != NULL){
						foreach($quatroTres as $atual){
							echo "<form action='editQuatroTres.php' method='post'>
								<input type='text' name='nome' id='nome' value='{$atual->getTextoQuatro()}' required />
								<br />
								<input type='submit' value='Editar' />
							</form>";
						}
					}else{
						echo "<h3>Nenhum registro armazenado.</h3>";
					}					
							echo "</li>
							</ul>
						  ";  
				}	
			}	
			
			
			if(isset($_SESSION['iDir'])){			
				if($_SESSION['iDir'] == False){		
						echo" 
						<li class='dropdown-submenu'>
				<a class='test' tabindex='-1' href='#' style='height: 40px;'>Imagem a Direita<span class='caret'></span></a>
				<ul class='dropdown-menu' 
				style='
					margin-left: 1px;
					width: 100%; 
					text-align: center;
				'>
				
				
				
				  <li>
					  <form action='updateImageTres.php' method='post' enctype='multipart/form-data'>
							<input type='file' name='upload' />
							<input type='submit' value='Editar' /> 
					  </form>
				  </li>
				</ul>
						";
				}		
			}
			
			if(isset($_SESSION['em']) or isset($_SESSION['ts'])){	
				if($_SESSION['em'] == False or $_SESSION['ts'] == False){		
						echo" 
						<li class='dropdown-submenu'>
				<a class='test' tabindex='-1' href='#' style='height: 40px;'>Email e Sobre <span class='caret'></span></a>
				<ul class='dropdown-menu' 
				style='
					margin-left: 1px;
					width: 100%; 
					text-align: center;
				'>
				
				
				
				  <li>";
						if($seis != NULL){
							foreach($seis as $atual){
								echo "<form action='editSeis.php' method='post'>
									<input type='text' name='email' id='email' value='{$atual->getEmail()}' required />
									<br />
									<input type='text' name='nome' id='nome' value='{$atual->getTextoSeis()}' required />
									<br />
									<input type='submit' value='Editar' />
								</form>";
							}
						}else{
							echo "<h3>Nenhum registro armazenado.</h3>";
						}
									echo"</li>
								</ul> 
							  </li>";
				}	  
			}
					echo"</ul>
				  </div>
				";

				echo"
<div class='dropdown'>
    <button class='btn btn-default dropdown-toggle' type='button' data-toggle='dropdown' style='
		  width: 100%;
		  backgrond-color: white;
		  height: 60px;
		  font-size: 150%;
		  font-family:Duldolar;
		  letter-spacing: 2px;
		  '>Remover
    <span class='caret'></span></button>
    <ul class='dropdown-menu' 
    style='
    	text-align: center;
    	font-size: 110%;
    	font-family:galyon;
		letter-spacing: 2px;
	'>
	<li class='dropdown-submenu'>";
	if(isset($_SESSION['il'])){
		if($_SESSION['il'] == False){
          	echo"<li><a class='test' tabindex='-1' href='padraoIL.php'>Logo</a></li>";
        } 
      }
      
      if(isset($_SESSION['tp'])){    
         if($_SESSION['tp'] == False){ 
          	echo"<li><a class='test' tabindex='-1' href='padraoTP.php'>Texto Principal</a></li>";
        }  
      }
       
      if(isset($_SESSION['iUm'])){    
         if($_SESSION['iUm'] == False){
		  	echo"<li><a class='test' tabindex='-1' href='padraoIUM.php'>Imagem 1 do slide</a></li>";
		 }
	  }
	  
	  if(isset($_SESSION['iDois'])){ 
		 if($_SESSION['iDois'] == False){ 
		  echo"<li><a class='test' tabindex='-1' href='padraoIDOIS.php'>Imagem 2 do slide</a></li>";
		 }
	  }
	  
	  if(isset($_SESSION['iTres'])){ 
		 if($_SESSION['iTres'] == False){
		  echo"<li><a class='test' tabindex='-1' href='padraoITRES.php'>Imagem 3 do slide</a></li>";
		  }
	  }
		
	  if(isset($_SESSION['du'])){  
		 if($_SESSION['du'] == False){ 
	  	  echo"<li><a class='test' tabindex='-1' href='padraoDU.php'>Descrição 1 do slide</a></li>";
	  	 }
	  }
	  
	  if(isset($_SESSION['dd'])){	 
	  	 if($_SESSION['dd'] == False){
		  echo"<li><a class='test' tabindex='-1' href='padraoDD.php'>Descrição 2 do slide</a></li>";
		 }
	  }
		
	  if(isset($_SESSION['dt'])){	 
		 if($_SESSION['dt'] == False){	  
		  echo"<li><a class='test' tabindex='-1' href='padraoDT.php'>Descrição 3 do slide</a></li>";
		 }
	  }
	  
	  if(isset($_SESSION['te'])){ 
		 if($_SESSION['te'] == False){
		  echo"<li><a class='test' tabindex='-1' href='padraoTE.php'>Texto a esquerda</a></li>";
		  }
	  }
	  
	  if(isset($_SESSION['iEsq'])){  
		 if($_SESSION['iEsq'] == False){ 
		  echo"<li><a class='test' tabindex='-1' href='padraoIESQ.php'>Imagem a esquerda</a></li>";
		 }
	  }
	  
	  
	  if(isset($_SESSION['iDir']) and $_SESSION['iDir'] == True){
		  if(isset($_SESSION['tc'])){  
			 if($_SESSION['tc'] == False){  
			  echo"<li><a class='test' tabindex='-1' href='padraoTC.php'>Texto Central</a></li>";
			  }
		  }
		  if(isset($_SESSION['iCen'])){  
			 if($_SESSION['iCen'] == False){  
			  echo"<li><a class='test' tabindex='-1' href='padraoICEN.php'>Imagem Central e Texto Central</a></li>";
			  }
		  }
	  }else{
	  
	  	if(isset($_SESSION['tc'])){  
			 if($_SESSION['tc'] == False){  
			  echo"<li><a class='test' tabindex='-1' href='padraoTC.php'>Texto Central</a></li>";
			  }
		  }
		  if(isset($_SESSION['iCen'])){  
			 if($_SESSION['iCen'] == False){  
			  echo"<li><a class='test' tabindex='-1' href='padraoICEN.php'>Imagem Central e Texto Central</a></li>";
			  }
		  }
	  
	  }
	  
	  
	if(isset($_SESSION['td'])){  
		 if($_SESSION['td'] == False){  
		  echo"<li><a class='test' tabindex='-1' href='padraoTD.php'>Texto a Direita</a></li>";
		  }
	  }
	    
	  if(isset($_SESSION['iDir'])){  
		 if($_SESSION['iDir'] == False){  
		  echo"<li><a class='test' tabindex='-1' href='padraoIDIR.php'>Imagem a Direita e Texto a Direita</a></li>";
		  }
	  }
		
	  if(isset($_SESSION['em'])){  
		 if($_SESSION['em'] == False){
		  echo"<li><a class='test' tabindex='-1' href='padraoEM.php'>Email</a></li>";
		 }
	  }
		
	  if(isset($_SESSION['ts'])){ 
		 if($_SESSION['ts'] == False){
		  echo"<li><a class='test' tabindex='-1' href='padraoTS.php'>Texto Sobre</a></li>";
		  }
	  }
		  
      echo"</li>
    </ul>
  </div>";
  
}
  
  echo"<div class='dropdown'>
		<div class='btnForm'>
	  		<a href='home.php'><button id='myBtn'>Home</button></a>
	  	</div>
	</div>

  </div>
  </div>";



echo"
<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on('click', function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>

</body>
</html>

	";
	
?>
