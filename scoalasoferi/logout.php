<?php
// Deconectarea utilizatorului 

// initializarea sesiunii
session_start();
 
// golirea variabilelor sesiunii
$_SESSION = array();
 
// terminarea sesiunii
session_destroy();
 
// redirectionarea catre pagina de login
header("location: login_register.php");
exit;
?>