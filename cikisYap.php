<?php

    session_start();
    unset($_SESSION['kullanici_adi']);
    
    

    header("location:index.php");

?>
