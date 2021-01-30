<?php
// Pagina de inregistrare a unui nou utilizator

// includerea fisierului de configurare
require_once "config.php";
 
// definirea variabilelor si initializarea cu valori nule
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
 
// procesarea datelor formularului atunci cand se apasa butonul de submit
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // validarea username-ului
    if(empty(trim($_POST["username"]))){
        $username_err = "Te rog introdu numele de utilizator.";
    } else{
        // obtinerea id-ului 
        $sql = "SELECT id FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){

            // utilizarea variabilelor bind
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // setarea parametrului
            $param_username = trim($_POST["username"]);
            
            // executia interogarii
            if(mysqli_stmt_execute($stmt)){
                // memorarea rezultatului
                mysqli_stmt_store_result($stmt);
                
                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "Numele de utilizator este deja luat.";
                } else{
                    $username = trim($_POST["username"]);
                }
            } else{
                echo "Oops! Ceva nu a mers bine. Te rog incearca inca o data.";
            }

            // inchidere
            mysqli_stmt_close($stmt);
        }
    }
    
    // validarea parolei
    if(empty(trim($_POST["password"]))){
        $password_err = "Te rog introdu parola.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Parola trebuie sa contina cel putin 6 caractere.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // validarea parolei de confirmare
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Te rog confirma parola.";     
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($password_err) && ($password != $confirm_password)){
            $confirm_password_err = "Parolele nu corespund.";
        }
    }
    
    // verificarea existentei unor erori de introduce a datelor inainte ca acestea sa fie introduse in baza de date
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        
        // interogare pentru inserarea in tabelul users a unui nume de utilizator si a unei parole
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // utilizarea variabilelor bind
           mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
            
            // utilizarea parametrilor
            $param_username = $username;
            //$param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_password = $password;

            // executia interogarii
            if(mysqli_stmt_execute($stmt)){
                // redirectarea catre pagina login
                header("location: login_register.php");
            } else{
                echo "Ceva nu a mers bine. Incearca din nou.";
            }

            // inchidere
            mysqli_stmt_close($stmt);
        }
    }
    
    // inchiderea conexiunii
    mysqli_close($link);
}
?>
 
