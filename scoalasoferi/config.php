<?php

//credentialele bazei de date
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'scoalasoferi');
 
// conectarea la baza de date MySQL
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
//verificarea conexiunii
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>