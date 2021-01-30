<?php
// Interogarea complexa 3
// Mașini care nu au permisiunea să circule (nu au mai circulat, nu au asigurarea făcută și nici ITP-ul)
   
// conectarea la baza de date
    $connect = mysqli_connect("localhost", "root", "", "scoalasoferi");

    // preluarea valorilor din campul masina
    $query = "SELECT * FROM `masina`";
    $search_result = mysqli_query($connect, $query); 

    // interogarea complexa
    $query_="SELECT *
    FROM Masina M
    WHERE M.Masina_ID NOT IN
    (SELECT s.Masina_ID
     FROM Sedinta S
     WHERE M.Masina_ID = S.Masina_ID
    ) AND Data_ITP < DATE_SUB(CURDATE(), INTERVAL 2 YEAR) AND M.Asigurare=0
    ORDER BY M.Tip_Transmisie";

    $res = mysqli_query($connect, $query_); 
    
    

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
      <p style="color:white; font-family: 'Times New Roman'; font-size: 20px; text-align:center; margin-top:20px"> Mașini care nu au drept de a circula. </p>
          
              <table style="background: #1FA2FF; 
                        background: -webkit-linear-gradient(to top, #A6FFCB, #12D8FA, #1FA2FF); 
                        background: linear-gradient(to top, #20BDFF, #12D8FA, #20BDFF);">
                <tr>
                    <th> Marca</th>
                    <th> Model</th>
				    <th> Numar Inmatriculare </th>
					<th> Categorie </th>
					<th> Asigurare </th>
					<th> Data ITP</th>
					<th> Tip Transmisie</th>
								    
                  
                </tr>
                  <!-- populate table from mysql database -->
                  <?php while($row = mysqli_fetch_array($res)):?>
                <tr>
                    <td><?php echo $row['Marca'];?></td>
                    <td><?php echo $row['Model'];?></td>
                    <td style=" text-align: center;"><?php echo $row['Nr_Inmatriculare'];?></td>
                    <td style=" text-align: center;"><?php echo $row['Categorie'];?></td>
                    <td style=" text-align: center;"><?php echo $row['Asigurare'];?></td>
                    <td><?php echo $row['Data_ITP'];?></td>
                    <td style=" text-align: center;"><?php echo $row['Tip_Transmisie'];?></td>
                    
                </tr>
                <?php endwhile;?>
                
            </table>
    </form>
        
  
</body>
</html>