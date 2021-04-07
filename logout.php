<?php
    session_start();

    if (isset($_SESSION['kizo'])) 
    {
        $_SESSION['kizo'] = 0;
        header("Location: login.php");
    }
?>