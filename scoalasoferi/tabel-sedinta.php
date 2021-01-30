<?php
// Tabel pentru reprezentarea datelor sedintelor elevilor in pagina de DOSAR

// initializarea sesiunii
session_start();

// parametrii necesari conexiunii la baza de date
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "scoalasoferi";
$id = $_SESSION["id"];
$user = $_SESSION["username"];

// definirea variabilelor de tip array
$nr_sedinta = array( ); 
$sedinta_date = array( );
$hour_begin = array( );
$hour_end = array( );
$km = array( );
$instructor_id = array( );
$masina_id = array( );


// crearea conexiunii la baza de date
$mysqli = new mysqli($servername, $username, $password, $dbname);

// interogare pentru extragerea inregistrarilor din tabelul elev
$query_elev = "SELECT * FROM elev WHERE ELEV_ID =".$id;
// interogare pentru extragerea inregistrarilor din tabelul sedinta
$query_sedinta = "SELECT * FROM sedinta WHERE ELEV_ID=".$id;
// obtinerea id-ului userului care este logat
$nr_id = $mysqli->query("SELECT COUNT(Elev_ID) AS Total FROM sedinta WHERE Elev_ID =".$id);
$data = $nr_id->fetch_assoc();
$ROW=$data['Total'];


if ($result = $mysqli->query($query_sedinta)) {

    while ($row = $result->fetch_assoc()) {
		// salvarea inregistrarilor tabelului cu ajutorul unor variabile de tip array
		$nr_sedinta[] = $row["Nr_Sedinta"];
		$masina_id[] = $row["Masina_ID"];
		$instructor_id[] = $row["Instructor_ID"];
        $sedinta_date[] = $row["Data_Sedinta"];
        $hour_begin[] = $row["Ora_Inceput"];
        $hour_end[] = $row["Ora_Sfarsit"];
		$km[] = $row["Km_Deplasare"];
     
    }


	$result->free();

}


for ($i = 0; $i < $ROW; $i++) {
	// interogare pentru obtinerea numelui si prenumelui instructorului
	$instructor_query=$mysqli->query("SELECT Nume, Prenume FROM instructor WHERE Instructor_ID=".$instructor_id[$i]);
	// interogare pentru obtinerea numarului de inmatriculare a masinii
	$masina_query=$mysqli->query("SELECT Nr_Inmatriculare FROM masina WHERE Masina_ID=".$masina_id[$i]);
	
	while ($instr = $instructor_query->fetch_assoc()) {
		// salvarea numelui si prenumelui instructorului  cu ajutorul unor variabile de tip array
		$nume_instructor[] = $instr["Nume"];
		$prenume_instructor[] = $instr["Prenume"];
	}

	while ($instrr = $masina_query->fetch_assoc()){
		// salvarea nr de inmatriculare a  masinii cu ajutorul unei variabile de tip array
		$masina[] = $instrr["Nr_Inmatriculare"];
	}
	
}



?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/MAIN.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head">
								<th class="column1">Nr Sedinta</th>
								<th class="column2" >Data Sedinta</th>
								<th class="column3"> Instructor </th>
								<th class="column4"> Masina </th>
								<th class="column5">Ora Inceput</th>
								<th class="column6">Ora Sfarsit</th>
								<th class="column7">Deplasare</th>
											
								
							</tr>
						</thead>
					</table>

					<script>
       				 	var table = '';
       				 	var rows = <?php echo json_encode($ROW); ?>;
						var cols = 7;

						// afisarea datelor memorate intr-un tabel
       				 	for(var r = 0; r < rows; r++){
            		 		table += '<tr>';
								for(var c = 1; c <= cols;c++) 
								{
								
									if(c==1)
										
										table += '<td class="column1">' + <?php echo json_encode($nr_sedinta); ?>[r] + '</td>';		
									
									if(c==2)
										table += '<td class="column2">' + <?php echo json_encode($sedinta_date); ?>[r] + '</td>';

									if(c==3)
										table += '<td class="column3">' + <?php echo json_encode($nume_instructor); ?>[r] +' '+ <?php echo json_encode($prenume_instructor); ?>[r]+ '</td>';

									if(c==4)
										table += '<td class="column4">' + <?php echo json_encode($masina); ?>[r] + '</td>';
        									
    								if(c==5)
										table += '<td class="column5">' + <?php echo json_encode($hour_begin); ?>[r] + '</td>';
											
									if(c==6)
										table += '<td class="column6">' + <?php echo json_encode($hour_end); ?>[r] + '</td>';
										
									if(c==7)
										table += '<td class="column7">' +  <?php echo json_encode($km); ?>[r]+" km " + '</td>';
								
									
           			 			}
            				
        				}

        				document.write('<table >'+ table +'</table>')

   					 </script>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>