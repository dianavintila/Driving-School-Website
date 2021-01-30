 <?php
 // Fisier pentru configurarea conexiunii la baza de date

 // parametrii pentru conectarea la baza de date
$servername = "localhost";
$username = "root"; // default username for localhost is root
$password = ""; // default password for localhost is empty
$dbname = "scoalasoferi"; // database name

// crearea conexiunii la baza de date
$conn = new mysqli($servername, $username, $password, $dbname);

// verificarea conexiunii
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?> 
