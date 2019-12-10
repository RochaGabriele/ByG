<?php
require_once("controle/solo.php");
$controle = new Solo();

$dois = $controle->selecionarTodosDois();
$quatroUm = $controle->selecionarPidQuatroUm();
$quatroDois = $controle->selecionarPidQuatroDois();
$seis = $controle->selecionarTodosSeis();

echo "<form action='updateImageDivUm.php' method='post' enctype='multipart/form-data'>
        <input type='file' name='upload' />
        <input type='submit' value='Editar' /> </form>
";

echo"<link rel='stylesheet' type='text/css' href='teste.css' />";
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

echo "<form action='updateImageDivTresUm.php' method='post' enctype='multipart/form-data'>
        <input type='file' name='upload' />
        <input type='submit' value='Editar' /> </form>
";

echo "<form action='updateImageDivTresDois.php' method='post' enctype='multipart/form-data'>
        <input type='file' name='upload' />
        <input type='submit' value='Editar' /> </form>
";

echo "<form action='updateImageDivTresTres.php' method='post' enctype='multipart/form-data'>
        <input type='file' name='upload' />
        <input type='submit' value='Editar' /> </form>
";

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


echo "<form action='updateImageUm.php' method='post' enctype='multipart/form-data'>
        <input type='file' name='upload' />
        <input type='submit' value='Editar' /> </form>
    ";



echo "<form action='updateImageDois.php' method='post' enctype='multipart/form-data'>
        <input type='file' name='upload' />
        <input type='submit' value='Editar' /> </form>
    ";

if($seis != NULL){
    foreach($seis as $atual){
    	echo "<form action='editSeis.php' method='post'>
			<input type='text' name='nome' id='nome' value='{$atual->getTextoSeis()}' required />
			<br />
			<input type='text' name='email' id='email' value='{$atual->getEmail()}' required />
			<br />
			<input type='submit' value='Editar' />
		</form>";
    }
}else{
    echo "<h3>Nenhum registro armazenado.</h3>";
}


echo"
	<a href='home.php'>
	 	<button class='btn-primary' style='display: block; margin-left: auto; margin-right: auto; cursor:pointer;'>Voltar para home</button>
	</a>
";

?>









