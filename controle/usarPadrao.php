<?php
session_start();
class usarPadrao{
        $_SESSION['stan'] = 'ok';        
        header("Location: ../visual/home.php");
}
?>
