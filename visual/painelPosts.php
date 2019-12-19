<?php
session_start();
require_once("../controle/solo.php");
$controle = new Solo();
if($_SESSION['usr']){

	echo "
	<!DOCTYPE html>
<html>
<head>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <link rel='stylesheet' href='../need/bootstrap.min.css'>
  <script src='../need/jquery.min.js'></script>
  <script src='../need/bootstrap.min.js'></script>
  <link rel='stylesheet' type='text/css' href='painelPosts.css' />
  
  
</head>
<body>
<video autoplay='autoplay' loop class='bg_video'>
			<source src='../videos/Organic.webm' type='video/webm'>
			<source src='../videos/Organic.mp4' type='video/mp4'>
		</video>	
		
		<div class='lad'>
	<h1 style='text-align: center; font-family:Ice Mirror in Winter Kei; margin-bottom: 3%; color: white; text-shadow: 2px 2px #000000; background-color: #2DA683;' class='tpainel'>Criar</h1>
	
	
	<h1 style='text-align: center; font-family:Ice Mirror in Winter Kei; margin-bottom: 3%; color: white; text-shadow: 2px 2px #000000; background-color: #2DA683;' class='tpainel'>Postagens</h1>
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
			'>Criar Postagem
			
			
			
			<span class='caret'></span></button>
				<ul class='dropdown-menu'
			style='
				text-align: center;
				margin-top: -58px;
			'>
			<li>
			<form action='../controle/add.php' method='post' enctype='multipart/form-data'>
				<label for='postagem'>Postagem:</label>
				<br />
				<input type='text' name='postagem' id='postagem' required />
				<br />
				<label for='subtext'>Sub-Texto:</label>
				<br />
				<input type='text' name='subtext' id='subtext' />
				<br />
				<label for='upload'>Imagem:</label>
				<br />
				<input type='file' name='upload' />
				<br />
				<input type='submit' value='Enviar' />
			</form>
			</li>
		</ul>
			";	
	  echo"<div class='dropdown'>
		<div class='btnForm'>
	  		<a href='verPosts.php'><button id='myBtn'>Ver Posts</button></a>
	  	</div>
	</div>

  </div>
  </div>";

	
	
	
	
	
	
	
	
}else{
	header("Location: bone.php");
}
?>
