<?php
// Resetarea parolei userlui

// initializarea sesiunii
session_start();
 
// se verifica daca userul este logat, altfel este redirectionat catre pagina de login
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login_register.php");
    exit;
}
 
// includerea fisierului de configurare  
require_once "config.php";
 
// definirea variabilelor si initializarea cu valori nule
$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 
// procesarea datelor formularului atunci cand se apasa butonul de submit
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // validarea noii parole
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Te rog introdu noua parola.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "Parola introdusa trebuie sa aiba cel putin 6 caractere.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
    // validarea parolei de confirmare
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Te rog confirma parola.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "Parolele nu corespund.";
        }
    }
        
  
    // se verifica erorile de input inainte ca baza de date sa fie updatata
    if(empty($new_password_err) && empty($confirm_password_err)){
        // pregatirea update-ului
        $sql = "UPDATE users SET password = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // utilizarea variabilelor bind pentru schimbarea parolei 
            mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);
            
            // setarea parametrilor
            $param_password = $new_password;
            $param_id = $_SESSION["id"];
            
            // executia schimbarii parolei
            if(mysqli_stmt_execute($stmt)){
                //parola a fost schimbata cu succes; se inchide sesiunea si se redirectioneaza catre pagina de login
                session_destroy();
                header("location: login_register.php");
                exit();
            } 
            else{
                echo "Oops! Ceva nu a mers bine. Mai incearca o data.";
            }

            //inchidere
            mysqli_stmt_close($stmt);
        }
    }
    
    //inchiderea conexiunii
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style-reset.css" />
    <title>Reset Password</title>
</head>
<body>
        <div class="reset-pass">
          <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="sign-in-form">
            <h2 class="title">Parola noua</h2>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="parola noua" name="new_password" class="form-control"  pattern="(?=.*?[A-Z])(?=(.*[a-z]){1,})(?=(.*[\d]){1,})(?=(.*[\W]){1,})(?!.*\s).{6,}" minlength="6" title="Parola introdusa trebuie sa fie de minim 6 caractere dintre care cel putin o majuscula, o minuscula, o cifra si un caracter special." value="<?php echo $new_password; ?>" required>
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="confirmare parola" name="confirm_password" class="form-control"  pattern="(?=.*?[A-Z])(?=(.*[a-z]){1,})(?=(.*[\d]){1,})(?=(.*[\W]){1,})(?!.*\s).{6,}" minlength="6" title="Parolele nu corespund." value="<?php echo $new_password; ?>" required>
            </div>

            
            <input type="submit" value="Trimitere" class="btn btn-primary" />
            <button type="button" class="btn btn-outline-success and-all-other-classes"> 
            <a href = "welcome.php" style="color:inherit; text-decoration: none; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif">Inchidere</a>
            </button>
           
            
          </form>
        </div>
        
          
</body>
</html>
