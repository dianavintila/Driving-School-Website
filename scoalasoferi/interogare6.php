<?php
// Interogarea simpla 4
// Afișarea elevilor și a modelului mașinii în funcție de categoria de permis (câmp variabil)
if(isset($_POST['search']))
{   // preia valoarea din campul variabil 'categoria de permis'
    $valueToSearch = $_POST['valueToSearch'];

    // interogarea simpla
    $query = "SELECT E.Nume, E.Prenume, M.Model, M.Marca
    FROM Elev E INNER JOIN Sedinta S ON E.Elev_ID=S.Elev_ID
    INNER JOIN Masina M ON M.Masina_ID=S.Masina_ID
    WHERE  E.Categorie_Permis='".$valueToSearch."' GROUP BY E.Nume, E.Prenume";
    $search_result = filterTable($query);
    
}
else
{
    $query = "SELECT E.Nume, E.Prenume, M.Model, M.Marca
    FROM Elev E INNER JOIN Sedinta S ON E.Elev_ID=S.Elev_ID
    INNER JOIN Masina M ON M.Masina_ID=S.Masina_ID
    GROUP BY  E.Elev_ID";
    $search_result = filterTable($query);
}

// functie pentru conectarea la baza de date si executia interogarii
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "scoalasoferi");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <title>Interogare</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images_/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor_/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts_/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor_/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor_/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor_/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css_/util.css">
	<link rel="stylesheet" type="text/css" href="css_/fmain.css">
<!--===============================================================================================-->
</head>
    <style>
    body{
	    background: #56CCF2;  /* fallback for old browsers */
 	    background: -webkit-linear-gradient(to left, #2F80ED, #56CCF2);  /* Chrome 10-25, Safari 5.1-6 */
	    background: linear-gradient(to left, #2F80ED, #56CCF2); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */}
     
    html {
    max-height: 768px;
    padding-left: 10%;
    padding-right: 10%;
    padding-top: 5%;
    margin-bottom: 5%;
    }

    table {
    font-family: 'Arial';
    margin: 10px auto;
    border-collapse: collapse;
    border: 1px solid #eee;
    border-bottom: 2px solid #00cccc;
    box-shadow: 0px 0px 20px rgba(0,0,0,0.10),
     0px 10px 20px rgba(0,0,0,0.05),
     0px 20px 20px rgba(0,0,0,0.05),
     0px 30px 20px rgba(0,0,0,0.05);
     margin-top:20px;
     margin-bottom: 5%;
  
    }

    tr:hover{ background: #f4f4f4;}
    td{color: #20BDFF;}
    th, td {
    color: black;
    border: 1px solid #eee;
    padding: 7px 15px;
    border-collapse: collapse;
    }
    th {
    background: #20BDFF;
    color: #fff;
    text-transform: uppercase;
    font-size: 12px;
    }
      
        
    </style>
     
            
</head>
<body>

    <form action="" method="post">
            <p style="color:white; font-family: 'Times New Roman'; font-size: 20px; text-align:center;">Afișarea elevilor și a modelului mașinii pe care aceștia o conduc, în funcție de categoria de permis.</p>

            <input type="text" name="valueToSearch" placeholder="Categoria de permis" style="border-radius: 25px; margin-left:43%; margin-top:1px; text-align:center"><br><br>
            <input type="submit" name="search" value="Filter" style="border-radius: 25px; margin-left:50%; margin-top:1px; text-align:center"><br><br>

            <table style="background: #1FA2FF; 
                        background: -webkit-linear-gradient(to top, #A6FFCB, #12D8FA, #1FA2FF); 
                        background: linear-gradient(to top, #20BDFF, #12D8FA, #20BDFF);">
                <tr>
                    <th>Nume</th>
                    <th>Prenume</th>
                    <th style=" text-align: center;">Marca</th>
                    <th style=" text-align: center;">Model</th>
				
                  
                </tr>
                  <!-- popularea tabelului cu valori din baza de date -->
                  <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['Nume'];?></td>
                    <td><?php echo $row['Prenume'];?></td>
                    <td style=" text-align: center;"><?php echo $row['Marca'];?></td>
                    <td style=" text-align: center;"><?php echo $row['Model'];?></td>

					          
                    
                </tr>
                <?php endwhile;?>
            </table>
    </form>
        
  
</body>
</html>