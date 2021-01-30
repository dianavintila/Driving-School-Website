<?php
// Interogarea complexa 2
//  În ce an s-au înscris cei mai mulți elevi la școala de șoferi? Se afișează anul și numărul elevilor.
    
    // conectarea la baza de date
    $connect = mysqli_connect("localhost", "root", "", "scoalasoferi");

    // interogarea complexa
    $query_="SELECT  YEAR(Data_Inscriere) AS An, COUNT(Data_Inscriere) as NrElevi
    FROM Dosar 
    GROUP BY YEAR(Data_Inscriere)
    HAVING COUNT(Data_Inscriere) = (SELECT COUNT(YEAR(D.Data_Inscriere))
    FROM Dosar D                      
    GROUP BY YEAR(D.Data_Inscriere)
    ORDER BY COUNT(D.Data_Inscriere) DESC
    LIMIT 1)
    ORDER BY COUNT(Data_Inscriere), YEAR(Data_Inscriere) DESC
    LIMIT 1";
    $res = mysqli_query($connect, $query_); 
    $row = mysqli_fetch_array($res);

    // interogare simpla
    $query = "SELECT  D.Data_Inscriere, D.Data_Expirare, D.Categorie_Permis, D.Total_Ore, E.Nume, E.Prenume   FROM  Dosar D INNER JOIN Elev E ON E.Dosar_ID=D.Dosar_ID WHERE YEAR(Data_Inscriere)='".$row['An']."'";
    $search_result = mysqli_query($connect, $query); 

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
         <p style="color:white; font-family: 'Times New Roman'; font-size: 25px; text-align:center;" >În anul <?php echo $row['An']?> s-au înscris cei mai mulți elevi la școala de șoferi în număr de <?php echo $row['NrElevi']?>.</p>

            
            <table style="background: #1FA2FF; 
                        background: -webkit-linear-gradient(to top, #A6FFCB, #12D8FA, #1FA2FF); 
                        background: linear-gradient(to top, #20BDFF, #12D8FA, #20BDFF);">
                <tr>
                    <th> Nume</th>
                    <th> Prenume</th>
                    <th> Data Inscriere</th>
                    <th> Data Expirare</th>
					<th> Categorie Permis</th>
					<th> Total Ore </th>
					
                  
                </tr>
                  <!-- popularea tabelului cu valori din baza de date -->
                  <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['Nume'];?></td>
                    <td><?php echo $row['Prenume'];?></td>
                    <td><?php echo $row['Data_Inscriere'];?></td>
                    <td><?php echo $row['Data_Expirare'];?></td>
                    <td style=" text-align: center;" ><?php echo $row['Categorie_Permis'];?></td>
                    <td style=" text-align: center;"><?php echo $row['Total_Ore'];?></td>
                   
                </tr>
                <?php endwhile;?>
            </table>
    </form>
        
  
</body>
</html>