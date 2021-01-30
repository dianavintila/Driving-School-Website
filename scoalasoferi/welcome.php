<?php
// PAGINA PRINCIPALA

// initializarea sesiunii
session_start();

// se verifica daca userul este logat, daca nu, atunci este redirectionat catre pagina de login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bine ai venit!</title>
    <link rel="stylesheet" type="text/css" href="style-welcome.css">
   
</head>


<body>
    <header>
        <div class="wrapper">
            <ul class="nav-area">
                <li><a href="#">Acasa</a></li>
                <li><a href="#">Servicii</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="informatii_utile.php" class="btn btn-warning">Informatii Utile</a></li>
                <li><a href="dosar.php" class="btn btn-dosar">Dosar elev</a></li>
                <li><a href="reset-password.php" class="btn btn-warning">Resetare parola</a></li>
                <li><a href="admin_login.php" class="btn btn-warning">Admin</a></li>
                <li><a href="logout.php" class="btn btn-danger">Deconectare</a></li>
                
            </ul>
        </div>

        <div class="welcome-text">
            <h1>SCOALA DE SOFERI!</h1>
            <a href="#">Inscrie-ma!</a>
        </div>

    </header>
            

</body>
</html>


