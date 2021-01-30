<?php
// Pagina de dosar a elevului 

// initializarea sesiunii
session_start();

// parametrii necesari conectarii la baza de date
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "scoalasoferi";
$id = $_SESSION["id"];
$user = $_SESSION["username"];

// crearea conexiunii la baza de date
$mysqli = new mysqli($servername, $username, $password, $dbname);


// interogare pentru extragerea inregistrarilor din tabelul elev
$query_elev = "SELECT * FROM elev WHERE ELEV_ID =".$id;


// interogare pentru extragerea inregistrarilor din tabelul dosar
$query_dosar = "SELECT * FROM dosar D INNER JOIN elev e ON d.Dosar_ID=e.Dosar_ID WHERE  ELEV_ID =".$id;



if ($result = $mysqli->query($query_elev)) {
    while ($row = $result->fetch_assoc()) {
        // salvarea inregistrarilor tabelului elev cu ajutorul unor variabile 
        $lastname = $row["Nume"];
        $firstname = $row["Prenume"];
        $adress = $row["Adresa"];
        $CNP = $row["CNP"];
        $age = $row["Varsta"];
        $phone = $row["Telefon"];
        $category = $row["Categorie_Permis"];
       
    }


$result->free();
}

if ($result = $mysqli->query($query_dosar)) {

    while ($row = $result->fetch_assoc()) {
        // salvarea inregistrarilor tabelului dosar cu ajutorul unor variabile 
        $ini_date = $row["Data_Inscriere"];
        $fin_date = $row["Data_Expirare"];
        $hours = $row["Total_Ore"];
        $medical = $row["Apt_Medical"];
        $psyh = $row["Apt_Psihologic"];
        $cazier = $row["Certificat_Cazier"];
        $val_cazier = $row["Valabilitate_Cazier"];
        
        
    }


$result->free();
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="UTF-8">
    <title>User Settings Page</title>
    <link rel="stylesheet" href="stylee_dosar.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
</head>
<body>


    <div class="container">
        <div class="leftbox">
            <nav>
                <a onclick="tabs(0)" class="tab active">
                    <i class="fa fa-user"></i>
                </a>

                <a onclick="tabs(1)" class="tab">
                    <i class="fa fa-credit-card"></i>
                </a>

                <a onclick="tabs(2)" class="tab">
                    <i class="fa fa-tv"></i>
                </a>

                <a onclick="tabs(3)" class="tab"   href="tabel-sedinta.php">
                    <i class="fa fa-tasks"></i>
                </a>

               

            </nav>
        </div>
        
        <div class="rightbox">
            <div class="profile tabShow">
                <h1>Date Personale</h1>
                <h2>Nume</h2>
                <input type="text" class="input" value="<?= $lastname ?>">
                <h2>Prenume</h2>
                <input type="text" class="input" value="<?= $firstname ?>">
                <h2>Adresa</h2>
                <input type="text" class="input" value="<?= $adress ?>">
                <h2>CNP</h2>
                <input type="text" class="input" value="<?= $CNP ?>">
                <h2>Varsta</h2>
                <input type="text" class="input" value="<?= $age ?>">
                <h2>Telefon</h2>
                <input type="text" class="input" value= " +4<?= $phone ?>">
                <h2>Categorie Permis</h2>
                <input type="text" class="input" value="<?= $category ?>">


            </div>
     
        
            <div class="payment tabShow">
                <h1>Plata Info</h1>
                <h2>Tip de Plata</h2>
                <input type="text" class="input" value="Matsercard">
                <h2>Adresa</h2>
                <input type="text" class="input" value="<?= $adress ?>">
                <h2>Data</h2>
                <input type="text" class="input" value="25 ianuarie 2021">
                <h2>Cod Fiscal</h2>
                <input type="text" class="input" value="1234567">
                <h2>Total</h2>
                <input type="text" class="input" value="150 RON">
                

            </div>

            <div class="subscription tabShow">
                <h1>Detalii</h1>
                <h2>Nume</h2>
                <input type="text" class="input" value="<?= $lastname." ".$firstname?>">
                <h2>Parola</h2>
                <input type="password" class="input" value="PAROLA">
                
            </div>

            <div class="sessions tabShow">
                <h1>Sedinte Info</h1>
                
            </div>


    </div>
</div>

    <script src="jquery-3.5.1.min.js"></script>
    
    <script>
        const tabBtn = document.querySelectorAll(".tab");
        const tab = document.querySelectorAll(".tabShow");

        function tabs(panelIndex){
            tab.forEach(function(node){
                node.style.display = "none";
            });
            tab[panelIndex].style.display = "block";

        }
        tabs(0);
    </script>

    <script>
        $(".tab").click(function(){
            $(this).addClass("active").siblings().removeClass("active");
        })

    </script>



</body>
</html>