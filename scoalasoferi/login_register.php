<?php
// PAGINA DE LOGIN a utilizatorului

// initializarea sesiunii
session_start();
 
// se verifica daca userul este deja logat, daca da, atunci este refirectionat catre pagina welcome
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
  header("location: welcome.php");
  exit;
}
 
// includerea fisierlui de configurare
require_once "config.php";
 
// definirea variabilelor si initializarea acestora cu valori nule
$username = $password = "";
$username_err = $password_err = "";
 
// procesarea  datelor formuralului atunci cand se apasa butonul de submit
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // se verifica daca campul de username este gol
    if(empty(trim($_POST["username"]))){
        $username_err = "Te rog introdu numele de utilizator.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // se verifica daca campul parolei este gol
    if(empty(trim($_POST["password"]))){
        $password_err = "Te rog introdu parola.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // validarea credentialelor
    if(empty($username_err) && empty($password_err)){
        // interogare pentru obtinerea id-ului, username-ului si a parolei
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            //utilizarea variabilelor de tip bind
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // setarea parametrilor
            $param_username = $username;
            
            // executia interogarii
            if(mysqli_stmt_execute($stmt)){
                // stocarea rezultatlui
                mysqli_stmt_store_result($stmt);
                
                // se verifica daca usernameul exista, daca da atunci se verifica parola
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // variabila de tip bind
                    mysqli_stmt_bind_result($stmt, $id, $username, $_password);
                    if(mysqli_stmt_fetch($stmt)){
                       // if(password_verify($password, $hashed_password)){
                        if(strcmp($password, $_password)==0){
                            // daca parola este corecta, se porneste o noua sesiune
                            session_start();
                            
                            // salvarea datelor in variabilele sesiunii
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // redirectionarea catre pagina welcome
                            header("location: welcome.php");
                        } else{
                            // afisarea unei erori daca parola nu este valida
                            $password_err = "Parola introdusa nu este valida.";
                        }
                    }
                } else{
                    // afisarea unui mesaj de eroare daca usernameul nu exista
                    $username_err = "Nu exista cont cu acest username.";
                }
            } else{
                echo "Oops! Ceva nu a mers bine. Te rog incearca din nou.";
            }

            // inchidere
            mysqli_stmt_close($stmt);
        }
    }
    
    // inchiderea conexiunii
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
      crossorigin="anonymous">
    </script>
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>

    <link rel="stylesheet" href="style.css" />

    <title>Sign in & Sign up</title>
  </head>

  <body>
    
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="sign-in-form">
            <h2 class="title">Bine ai venit!</h2>
            
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nume de utilizator" name="username" class="form-control"  pattern=[A-Za-z0-9\-_\.]{6,20} title="Nu exista cont cu acest username." value="<?php echo $username; ?>" required>
             <!-- <span class="help-block"><?php echo $username_err; ?></span> -->

            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Parola" name="password" class="form-control"  pattern="(?=.*?[A-Z])(?=(.*[a-z]){1,})(?=(.*[\d]){1,})(?=(.*[\W]){1,})(?!.*\s).{6,}" minlength="6" title="Parola introdusa nu este valida." required>
                <!--<span class="help-block"><?php echo $password_err; ?></span> -->
            </div>
            
            <input type="submit" value="Conectare" class="btn solid" /> 
          
           

            
          </form>
          
          <form  action="register.php" method="post" class="sign-up-form">
            <h2 class="title">Inscrie-te acum!</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nume de utilizator" name="username" class="form-control" pattern=[A-Za-z0-9\-_\.]{6,20} title="Username-ul trebuie sa fie format din minim 6 caractere si sa contina doar litere mari, mici, cifre si caracterele speciale: { _ , - , . } ." value="<?php echo $username; ?>" required>
             <!-- <span class="help-block"><?php echo $username_err; ?></span> -->
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Parola" name="password" class="form-control"  pattern="(?=.*?[A-Z])(?=(.*[a-z]){1,})(?=(.*[\d]){1,})(?=(.*[\W]){1,})(?!.*\s).{6,}" minlength="6" title="Parola introdusa trebuie sa fie de minim 6 caractere dintre care cel putin o majuscula, o minuscula, o cifra si un caracter special." required>
               <!-- <span class="help-block"><?php echo $password_err; ?></span> -->
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Confirmare parola" name="confirm_password" class="form-control"  pattern="(?=.*?[A-Z])(?=(.*[a-z]){1,})(?=(.*[\d]){1,})(?=(.*[\W]){1,})(?!.*\s).{6,}" minlength="6" title="Parolele nu coincid." required>
               <!-- <span class="help-block"><?php echo $password_err; ?></span> -->
            </div>

            <input type="submit" class="btn" value="Inregistrare"/>
            
            
            
          </form>
        </div>
      </div>
      

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Nou aici?</h3>
            <p>
              Inscrie-te la Scoala de Soferi acum!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Inscriere
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Esti deja inscris ?</h3>
            <p>
              Conecteaza-te acum!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Conectare
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>
    

    <script src="app.js"></script>
  </body>
</html>