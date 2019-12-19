<?php
session_start();
    $file = $_FILES['upload'];
    $arq = file_get_contents($file['tmp_name']);
    try{
        require_once('Conect.php');
        $con = new Conexao();
        $sql = "UPDATE imgCinco SET nameCinco = :n,tipoCinco = :t, binCinco = :b WHERE id=2;";
        $cmd = $con->getConexao()->prepare($sql);
        $cmd->bindParam('n',$file['name']);
        $cmd->bindParam('t',$file['type']);
        $cmd->bindParam('b',$arq);
        $cmd->execute();
        $_SESSION['iCen'] = False;
        $iCen = False;
        header("Location: ../visual/painel.php");
    }catch(Exception $ex){
        echo "{$ex->getMessage()}";
    }
?>
