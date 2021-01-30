<?php
    // Interogarea simpla 1 
    // Datele elevilor care sunt eligibili să urmeze cursurile la școala de șoferi
   
    // conectarea la baza de date
    $connect = mysqli_connect("localhost", "root", "", "scoalasoferi");

    // interogarea simpla 
    $query="SELECT *
    FROM Elev E INNER JOIN Dosar D
    WHERE D.Apt_Medical=1 AND D.Apt_Psihologic=1 AND D.Certificat_Cazier=1 AND  D.Valabilitate_Cazier> DATE_SUB(D.Data_Inscriere, INTERVAL 6 MONTH) AND E.Dosar_ID=D.Dosar_ID
    ORDER BY E.Nume, E.Prenume";
    $res = mysqli_query($connect, $query); 
   
    
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
    }

    tr:hover{ background: #f4f4f4;}
    td{color: #20BDFF;}
    th, td {
    color: black;
    border: 1px solid #eee;
    padding: 10px 15px;
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
     <h style="color:white; font-family: 'Times New Roman'; font-size: 20px; ">Datele elevilor care sunt eligibili să urmeze cursurile la școala de șoferi </h>
            
            <table style="background: #1FA2FF; 
                        background: -webkit-linear-gradient(to top, #A6FFCB, #12D8FA, #1FA2FF); 
                        background: linear-gradient(to top, #20BDFF, #12D8FA, #20BDFF);">
                <tr>
                    <th style=" text-align: center;"> Nume</th>
                    <th> Prenume</th>
					<th style=" text-align: center;"> Adresa</th>
					<th style=" text-align: center;"> CNP </th>
					<th style=" text-align: center;"> Telefon </th>
					<th style=" text-align: center;"> Categorie_Permis</th>
					
                  
                </tr>
                  <!-- popularea tabelului cu valori din baza de date -->
                  <?php while($row = mysqli_fetch_array($res)):?>
                <tr>
                    <td style=" text-align: center;"><?php echo $row['Nume'];?></td>
                    <td style=" text-align: center;"><?php echo $row['Prenume'];?></td>
                    <td><?php echo $row['Adresa'];?></td>
                    <td><?php echo $row['CNP'];?></td>
                    <td><?php echo $row['Telefon'];?></td>
                    <td style=" text-align: center;"><?php echo $row['Categorie_Permis'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
    </form>
        
  
</body>
</html>