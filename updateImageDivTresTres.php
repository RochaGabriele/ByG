<?php
session_start();
    $file = $_FILES['upload'];
    $arq = file_get_contents($file['tmp_name']);
    try{
        require_once('controle/Conect.php');
        $con = new Conexao();
        $sql = "UPDATE imgTres SET nameTres = :n,tipoTres = :t, binTres = :b WHERE id=3;";
        $cmd = $con->getConexao()->prepare($sql);
        $cmd->bindParam('n',$file['name']);
        $cmd->bindParam('t',$file['type']);
        $cmd->bindParam('b',$arq);
        $cmd->execute();
        $_SESSION['iTres'] = False;
        header("Location: painel.php");
    }catch(Exception $ex){
        echo $ex->getMessage();
    }
?>
