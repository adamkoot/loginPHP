<?php
    session_start();
?>
<html>
 <head>
  <title>
    logowanie
  </title>
 </head>
 <body>
 <form action="form.php" method="POST">
 //login to pierwsza linikja w pliku passwords
 //haslo to druga linijka w pliku passwords
 <br>
  Login: <input type=text name="login"/><br/>
  Haslo: <input type=password name="haslo"/><br/>
  <input type=submit value="Wyślij"/>
  </form>
 </body>

</html>