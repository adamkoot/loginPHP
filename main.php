<?php
    session_start();

    if (isset($_SESSION['kizo']) && $_SESSION['kizo'] == 1 ) { ?>
        <html>
        <head>
        <title>
            Strona główna
        </title>
        </head>
        <body>
        <h1>ZALOGOWANO</h1>
        <form action="logout.php" method="POST">
        <input type=submit value="Wyloguj"/>
        </form>
        </body>
        </html>
<?php
    } else {
        header("location: login.php");
    }
    ?>

