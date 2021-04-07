<?php
    session_start();
    if (!isset($_SESSION['kizo'])) { 
        $_SESSION['kizo'] = 0;       
    }

    $login = $_POST['login'];
    $haslo = $_POST['haslo'];
    
            if(file_exists("passwords.txt") )
                {
                    if ($login !== null && $haslo !== null) {                   
                        #pobieradnie pliku do tablicy
                        $lines = file("./passwords.txt");

                        if(trim($lines[0]) == $login && trim($lines[1]) == $haslo)
                        {
                            $_SESSION['kizo'] = 1;
                            
                            header("Location: main.php");
                            
                        }
                        else
                        {
                            header("Location: login.php");   
                        }       
                     }
                }
               

                
            
?>