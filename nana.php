if(isset($_SESSION['du'])){	
			if($_SESSION['du']){
				$padd = $controle->selecionarPadrao();
				if($padd != NULL){
					foreach($padd as $atual){
						echo"
						  <div class='mySlides fade'>";
						  if(isset($_SESSION['du'])){	
							if($_SESSION['du']){
								echo"<img src='carrTres.php?id=1'>";
							}
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
									  <div class='mySlides fade'>
										<img src='carrTres.php?id=1'>
										<div class='text' style='font-family: Louis George Cafe; font-size:18px;'>{$atual->getLegenda()}</div>
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
						  <div class='mySlides fade'>
							<img src='carrTres.php?id=1'>
							<div class='text' style='font-family: Louis George Cafe; font-size:18px;'>{$atual->getTextPadrao()}</div>
						  </div>
						  ";
						}
					   
				}else{
					echo "<h3>Nenhum registro armazenado.</h3>";
				}
	
	}

