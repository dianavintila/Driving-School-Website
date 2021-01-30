
<?php
// Pagina de logare a adminului

// initializarea sesiunii
session_start();
 
// includerea fisierului de configurare
require_once "config.php";
 
// definirea variabilelor si initierea lor cu valori nule
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
        $sql = "SELECT  id, username, password FROM admin WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            //utilizarea variabilelor de tip bind
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            //setarea parametrilor
            $param_username = $username;
            
            // executia interogarii
            if(mysqli_stmt_execute($stmt)){
                // stocarea rezultatului
                mysqli_stmt_store_result($stmt);
                
                // se verifica daca username-ul exista, daca da, atunci se verifica parola
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // rezultatul variabilelor bind
                    mysqli_stmt_bind_result($stmt, $id, $username, $_password);
                    
                    if(mysqli_stmt_fetch($stmt)){
                       
                        if(strcmp($password, $_password)==0){
                            //parola este corecta, se va incepe o sesiune noua
                            session_start();
                            
                            // stocarea valorilor in variabilele sesiunii
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // redirectionarea catre pagina de administrare
                            header("location: admin/dashboard.php");
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
    <meta charset="UTF-8">
    <title>Conectare</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Conectare Admin</h2>
        <p>Introdu credentialele pentru autentificare.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Nume de utilizator</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Parola</label>
                <input type="password" name="password" class="form-control">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
          
        </form>
    </div>    
</body>
</html>