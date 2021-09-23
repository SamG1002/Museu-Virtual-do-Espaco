<?php
    session_start();
    if($_SESSION['usernameSession'] != 'adm' && $_SESSION['passwordSession'] != '1234'){
        header("Location: ../index.php");
    }
?>