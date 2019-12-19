<?php
require_once("../controle/solo.php");
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
if($_SESSION['usr']){
	echo "
	<!DOCTYPE html>
<html>
<head>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='../need/bootstrap.min.css'>
  <script src='../need/jquery.min.js'></script>
  <script src='../need/bootstrap.min.js'></script>
  <link rel='stylesheet' type='text/css' href='painel.css' />
  
  
  
</head>
<body>
<video autoplay='autoplay' loop class='bg_video'>
			<source src='../videos/Organic.webm' type='video/webm'>
			<source src='../videos/Organic.mp4' type='video/mp4'>
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
						  <form action='../controle/updateImageDivUm.php' method='post' enctype='multipart/form-data'>
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
						  <form action='../controle/updateImageDivUm.php' method='post' enctype='multipart/form-data'>
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
									echo "<form action='../controle/editDois.php' method='post'>
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
									echo "<form action='../controle/editDois.php' method='post'>
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
						  <form action='../controle/updateImageDivTresUm.php' method='post' enctype='multipart/form-data'>
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
						  <form action='../controle/updateImageDivTresUm.php' method='post' enctype='multipart/form-data'>
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
						  <form action='../controle/updateImageDivTresDois.php' method='post' enctype='multipart/form-data'>
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
						  <form action='../controle/updateImageDivTresDois.php' method='post' enctype='multipart/form-data'>
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
						  <form action='../controle/updateImageDivTresTres.php' method='post' enctype='multipart/form-data'>
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
						  <form action='../controle/updateImageDivTresTres.php' method='post' enctype='multipart/form-data'>
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
							echo "<form action='../controle/editTresUm.php' method='post'>
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
							echo "<form action='../controle/editTresUm.php' method='post'>
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
								echo "<form action='../controle/editTresDois.php' method='post'>
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
								echo "<form action='../controle/editTresDois.php' method='post'>
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
								echo "<form action='../controle/editTresTres.php' method='post'>
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
								echo "<form action='../controle/editTresTres.php' method='post'>
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
								echo "<form action='../controle/editQuatroUm.php' method='post'>
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
								echo "<form action='../controle/editQuatroUm.php' method='post'>
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
					  <form action='../controle/updateImageUm.php' method='post' enctype='multipart/form-data'>
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
					  <form action='../controle/updateImageUm.php' method='post' enctype='multipart/form-data'>
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
										echo "<form action='../controle/editQuatroDois.php' method='post'>
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
										echo "<form action='../controle/editQuatroDois.php' method='post'>
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
							  <form action='../controle/updateImageDois.php' method='post' enctype='multipart/form-data'>
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
							  <form action='../controle/updateImageDois.php' method='post' enctype='multipart/form-data'>
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
										echo "<form action='../controle/editQuatroTres.php' method='post'>
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
										echo "<form action='../controle/editQuatroTres.php' method='post'>
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
									  <form action='../controle/updateImageTres.php' method='post' enctype='multipart/form-data'>
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
									  <form action='../controle/updateImageTres.php' method='post' enctype='multipart/form-data'>
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
								echo "<form action='../controle/editSeis.php' method='post'>
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
								echo "<form action='../controle/editSeis.php' method='post'>
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
					  <form action='../controle/updateImageDivUm.php' method='post' enctype='multipart/form-data'>
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
								echo "<form action='../controle/editDois.php' method='post'>
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
					  <form action='../controle/updateImageDivTresUm.php' method='post' enctype='multipart/form-data'>
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
					  <form action='../controle/updateImageDivTresDois.php' method='post' enctype='multipart/form-data'>
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
					  <form action='../controle/updateImageDivTresTres.php' method='post' enctype='multipart/form-data'>
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
							echo "<form action='../controle/editTresUm.php' method='post'>
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
								echo "<form action='../controle/editTresDois.php' method='post'>
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
								echo "<form action='../controle/editTresTres.php' method='post'>
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
								echo "<form action='../controle/editQuatroUm.php' method='post'>
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
					  <form action='../controle/updateImageUm.php' method='post' enctype='multipart/form-data'>
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
								echo "<form action='../controle/editQuatroDois.php' method='post'>
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
					  <form action='../controle/updateImageDois.php' method='post' enctype='multipart/form-data'>
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
							echo "<form action='../controle/editQuatroTres.php' method='post'>
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
					  <form action='../controle/updateImageTres.php' method='post' enctype='multipart/form-data'>
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
								echo "<form action='../controle/editSeis.php' method='post'>
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
          	echo"<li><a class='test' tabindex='-1' href='../controle/padraoIL.php'>Logo</a></li>";
        } 
      }
      
      if(isset($_SESSION['tp'])){    
         if($_SESSION['tp'] == False){ 
          	echo"<li><a class='test' tabindex='-1' href='../controle/padraoTP.php'>Texto Principal</a></li>";
        }  
      }
       
      if(isset($_SESSION['iUm'])){    
         if($_SESSION['iUm'] == False){
		  	echo"<li><a class='test' tabindex='-1' href='../controle/padraoIUM.php'>Imagem 1 do slide</a></li>";
		 }
	  }
	  
	  if(isset($_SESSION['iDois'])){ 
		 if($_SESSION['iDois'] == False){ 
		  echo"<li><a class='test' tabindex='-1' href='../controle/padraoIDOIS.php'>Imagem 2 do slide</a></li>";
		 }
	  }
	  
	  if(isset($_SESSION['iTres'])){ 
		 if($_SESSION['iTres'] == False){
		  echo"<li><a class='test' tabindex='-1' href='../controle/padraoITRES.php'>Imagem 3 do slide</a></li>";
		  }
	  }
		
	  if(isset($_SESSION['du'])){  
		 if($_SESSION['du'] == False){ 
	  	  echo"<li><a class='test' tabindex='-1' href='../controle/padraoDU.php'>Descrição 1 do slide</a></li>";
	  	 }
	  }
	  
	  if(isset($_SESSION['dd'])){	 
	  	 if($_SESSION['dd'] == False){
		  echo"<li><a class='test' tabindex='-1' href='../controle/padraoDD.php'>Descrição 2 do slide</a></li>";
		 }
	  }
		
	  if(isset($_SESSION['dt'])){	 
		 if($_SESSION['dt'] == False){	  
		  echo"<li><a class='test' tabindex='-1' href='../controle/padraoDT.php'>Descrição 3 do slide</a></li>";
		 }
	  }
	  
	  if(isset($_SESSION['te'])){ 
		 if($_SESSION['te'] == False){
		  echo"<li><a class='test' tabindex='-1' href='../controle/padraoTE.php'>Texto a esquerda</a></li>";
		  }
	  }
	  
	  if(isset($_SESSION['iEsq'])){  
		 if($_SESSION['iEsq'] == False){ 
		  echo"<li><a class='test' tabindex='-1' href='../controle/padraoIESQ.php'>Imagem a esquerda</a></li>";
		 }
	  }
	  
	  
	  if(isset($_SESSION['iDir']) and $_SESSION['iDir'] == True){
		  if(isset($_SESSION['tc'])){  
			 if($_SESSION['tc'] == False){  
			  echo"<li><a class='test' tabindex='-1' href='../controle/padraoTC.php'>Texto Central</a></li>";
			  }
		  }
		  if(isset($_SESSION['iCen'])){  
			 if($_SESSION['iCen'] == False){  
			  echo"<li><a class='test' tabindex='-1' href='../controle/padraoICEN.php'>Imagem Central e Texto Central</a></li>";
			  }
		  }
	  }else{
	  
	  	if(isset($_SESSION['tc'])){  
			 if($_SESSION['tc'] == False){  
			  echo"<li><a class='test' tabindex='-1' href='../controle/padraoTC.php'>Texto Central</a></li>";
			  }
		  }
		  if(isset($_SESSION['iCen'])){  
			 if($_SESSION['iCen'] == False){  
			  echo"<li><a class='test' tabindex='-1' href='../controle/padraoICEN.php'>Imagem Central e Texto Central</a></li>";
			  }
		  }
	  
	  }
	  
	  
	if(isset($_SESSION['td'])){  
		 if($_SESSION['td'] == False){  
		  echo"<li><a class='test' tabindex='-1' href='../controle/padraoTD.php'>Texto a Direita</a></li>";
		  }
	  }
	    
	  if(isset($_SESSION['iDir'])){  
		 if($_SESSION['iDir'] == False){  
		  echo"<li><a class='test' tabindex='-1' href='../controle/padraoIDIR.php'>Imagem a Direita e Texto a Direita</a></li>";
		  }
	  }
		
	  if(isset($_SESSION['em'])){  
		 if($_SESSION['em'] == False){
		  echo"<li><a class='test' tabindex='-1' href='../controle/padraoEM.php'>Email</a></li>";
		 }
	  }
		
	  if(isset($_SESSION['ts'])){ 
		 if($_SESSION['ts'] == False){
		  echo"<li><a class='test' tabindex='-1' href='../controle/padraoTS.php'>Texto Sobre</a></li>";
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
	}else{
	header("Location: bone.php");
}
?>
