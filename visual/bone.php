<?php
session_start();
if(isset($_SESSION['usr'])){
	header("Location: home.php");
}else{
	echo "
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset='utf-8'>
			    <title>Teste</title>
			    <link rel='stylesheet' type='text/css' href='style.css' />
			    <script src='../need/jquery.min.js'></script>
			    <script src='../need/sweetalert.min.js'></script>
		</head>
		<body>
		 <a href='homeII.php' style='color: #000; padding: 5px 5px 5px 5px; background-color: #fff;'>Usuario Comum? Clique aqui!</a>  
		<div class='container' >
    <a class='links' id='paramodificar'></a>
    <a class='links' id='paralogin'></a>
    	
    	<video autoplay='autoplay' loop class='bg_video'>
			<source src='../pri/Black - 13495.mp4' type='video/mp4'>
		</video>
		
    <div class='content'>     
    
    ";
if(isset($_SESSION['usrChecar'])){
	echo "    
    <div id='modificar'>
        <form method='post' action='../controle/modificar.php'> 
          <h1 style='color: #779ecb; text-shadow:1px 1px #000;'>Modificar</h1>          
          <p> 
            <label for='nome_cad'>Novo Usuario</label>
            <input id='nome_cad' name='nome_cad' required='required' type='text' placeholder='Ex: Cicrano' />
          </p>
          
          <p> 
            <label for='senha_cad'>Nova Senha</label>
            <input id='senha_cad' name='senha_cad' required='required' type='password' placeholder='Ex: 1234'/>
          </p>
          
          <p id='btnmod'> 
            <input style='background-color: #779ecb;' type='submit' value='Modificar'/> 
          </p>
          
          
          <p class='link'>  
            Usar padrão
            <a href='#paralogin' style='color: #779ecb;'> Ir para Login </a>
          </p>

        </form>
      </div>
"; 
}else{
 echo"
 	<div id='modificar'>
        <form> 
          <h1 style='color: #779ecb; text-shadow:1px 1px #000;'>Modificar</h1> 
          <p> 
            <label for='user_checar'>Usuario Atual</label>
            <input id='user_checar' name='user_checar' required='required' type='text' placeholder='Ex: Fulano'/>
          </p>
          
          <p> 
            <label for='senha_checar'>Senha Atual</label>
            <input id='senha_checar' name='senha_checar' required='required' type='password' placeholder='Ex: 1234' /> 
          </p>
          
          <p id='btnchecar'> 
            <input style='background-color: #779ecb;' type='submit' value='Entrar' /> 
          </p>
          
          <p class='link'>  
            Usar padrão
            <a href='#paralogin' style='color: #779ecb;'> Ir para Login </a>
          </p>
        </form>
      </div>";
} 
echo      "<!--FORMULÁRIO DE LOGIN-->
      
      <div id='login'>
        <form id='formlogin'> 
          <h1 style='color: #779ecb; text-shadow:1px 1px #000;'>Admin</h1> 
          <p> 
            <label for='user_login'>Usuario</label>
            <input id='user_login' name='user_login' id='user_login'  type='text' placeholder='Ex: Fulano'/>
          </p>	
          
          <p> 
            <label for='senha_login'>Senha</label>
            <input id='senha_login' name='senha_login' id='senha_login'  type='password' placeholder='Ex: 1234' /> 
          </p>
          
          <p id='btnenvia'> 
            <input style='background-color: #779ecb;' type='submit' value='Entrar' /> 
          </p>
          
		      <p class='link'>
		        Modificar padrão
		        <a href='#paramodificar' style='color: #779ecb;'>Modificar</a>
		      </p>
	     
        </form>
      </div>
    </div>
  </div> 


		</body>
		<script type='text/javascript' src='../js/login.js'></script>
	</html>

	";
	}
?>
