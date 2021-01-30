<?php 
include "config.php";

// Vizualizarea tabelului Plata 

// interogare pentru obtinerea datelor din tabelul PLATA
$sql = "SELECT * FROM plata";


//executia interogarii
$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title>View Page</title>
	 <!-- to make it looking good im using bootstrap -->
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<style>

a.highlight {
 position: absolute;
 top: 8%;
 right: 0%;
 transform: translate(-50%,-50%);
 width: 100px;
 height: 60px;
 text-align: right;
 line-height: 60px;
 color: #fff;
 font-size: 15px;
 text-transform: uppercase;
 text-align: center;
 text-decoration: none;
 font-family: sans-serif;
 box-sizing: border-box;
 background: linear-gradient(90deg, #03a9f4, #f441a4, #ffeb3b, #03a9f4);
 background-size: 400%;
 border-radius: 30px;
 z-index: 1; 
}
.highlight:hover {
 animation: animate 8s linear infinite;
}
@keyframes animate {
 0% {
  background-position: 0%;
 }
 100% {
  background-position: 400%;
 }
}

.highlight:before {
 content: '';
 position: absolute;
 top: -5px;
 bottom: -5px;
 right: -5px;
 left: -5px;
 z-index: -1;
 background: linear-gradient(90deg, #03a9f4, #f441a4, #ffeb3b, #03a9f4);
 background-size: 400%;
 border-radius: 40px;
 filter: blur(20px);
 opacity: 0;
 transition: 0.5s;
}

.highlight:hover:before {
 filter: blur(20px);
 opacity: 1;
 animation: animate 8s linear infinite;
}


h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}

table{
  width:100%;
  table-layout: fixed;
}

.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
 

.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 18px;
  color: white;
  text-transform: uppercase;
}

td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 19px;
  color: white;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}

.column5{
	
    padding-left: 10px;
    text-align: left; 
    padding-right: 60px;
}


.column7{
	
    padding-left: 10px;
    text-align: center; 
    padding-right: 60px;
} 

th.column3{
	
    padding-left: -10px;
    text-align: left; 
    padding-right: 60px;
}

th.column4{
	
    padding-left: -10px;
    text-align: left; 
    padding-right: 60px;
}

th.column7{
	
    padding-left: -10px;
    text-align: center; 
    padding-right: 60px;
}


@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
background-image: linear-gradient(to right top, #1eddd8, #00d5e6, #06ccef, #3dc2f4, #61b7f2, #64acf1, #6ca0ee, #7894e8, #7483e6, #7771e2, #7d5ddb, #8744d0);	font-family: 'Times New Roman', Times, serif, sans-serif;
	
}
section{
  margin: 50px;
}


#container {
  width: 60px;
  height: 20px;
  display: flex;
  align-items: center;
  justify-content: center;
}
a.buttonred {
  position: relative;
  cursor: pointer;
  border: none;
  outline: none;
  background: none;
  color: #ff178f;
  font-size: 20px;
  
  padding: 15px 10px;
  overflow: hidden;
}
a.buttonred span {
  position: absolute;
}
a.buttonred span:nth-child(1) {
  bottom: 0;
  left: -100%;
  width: 100%;
  height: 1px;
  background: linear-gradient(90deg, transparent, #ff178f);
}
a.buttonred span:nth-child(2) {
  bottom: -100%;
  right: 0;
  width: 1px;
  height: 100%;
  background: linear-gradient(0deg, transparent, #ff178f);
}
a.buttonred span:nth-child(3) {
  top: 0;
  right: -100%;
  width: 100%;
  height: 1px;
  background: linear-gradient(-90deg, transparent, #ff178f);
}
a.buttonred span:nth-child(4) {
  top: -100%;
  left: 0;
  width: 1px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #ff178f);
}
a.buttonred:hover {
  color: #000;
  box-shadow: 0 0 10px #ff178f,
              0 0 40px #ff178f,
              0 0 80px #ff178f;
  background: #ff178f;
  transition-delay: 0.5s;
}
a.buttonred:hover span:nth-child(1) {
    animation: leftLine .5s linear 0s;
}
a.buttonred:hover span:nth-child(2) {
    animation: bottomLine .5s linear .25s;
}
a.buttonred:hover span:nth-child(3) {
    animation: rightLine .5s linear 0s;
}
a.buttonred:hover span:nth-child(4) {
    animation: topLine .5s linear .25s;
}
@keyframes topLine {
    0% {
      top: -100%;
    }
    100% {
      top: 100%;
    }
}
@keyframes bottomLine {
    0% {
      bottom: -100%;
    }
    100% {
      bottom: 100%;
    }
}
@keyframes rightLine {
    0% {
      right: -100%;
    }
    100% {
      right: 100%;
    }
}
@keyframes leftLine {
    0% {
      left: -100%;
    }
    100% {
      left: 100%;
    }
}

a.buttonblue {
  position: relative;
  cursor: pointer;
  border: none;
  outline: none;
  background: none;
  color: #0ff5fc;
  font-size: 20px;
  
  padding: 15px 10px;
  overflow: hidden;
}
a.buttonblue span {
  position: absolute;
}
a.buttonblue span:nth-child(1) {
  bottom: 0;
  left: -100%;
  width: 100%;
  height: 1px;
  background: linear-gradient(90deg, transparent, #0ff5fc);
}
a.buttonblue span:nth-child(2) {
  bottom: -100%;
  right: 0;
  width: 1px;
  height: 100%;
  background: linear-gradient(0deg, transparent, #0ff5fc);
}
a.buttonblue span:nth-child(3) {
  top: 0;
  right: -100%;
  width: 100%;
  height: 1px;
  background: linear-gradient(-90deg, transparent, #0ff5fc);
}
a.buttonblue span:nth-child(4) {
  top: -100%;
  left: 0;
  width: 1px;
  height: 100%;
  background: linear-gradient(180deg, transparent, #0ff5fc);
}
a.buttonblue:hover {
  color: #000;
  box-shadow: 0 0 10px #0ff5fc,
              0 0 40px #0ff5fc,
              0 0 80px #0ff5fc;
  background: #0ff5fc;
  transition-delay: 0.5s;
}
a.buttonblue:hover span:nth-child(1) {
    animation: leftLine .5s linear 0s;
}
a.buttonblue:hover span:nth-child(2) {
    animation: bottomLine .5s linear .25s;
}
a.buttonblue:hover span:nth-child(3) {
    animation: rightLine .5s linear 0s;
}
a.buttonblue:hover span:nth-child(4) {
    animation: topLine .5s linear .25s;
}
@keyframes topLine {
    0% {
      top: -100%;
    }
    100% {
      top: 100%;
    }
}
@keyframes bottomLine {
    0% {
      bottom: -100%;
    }
    100% {
      bottom: 100%;
    }
}
@keyframes rightLine {
    0% {
      right: -100%;
    }
    100% {
      right: 100%;
    }
}
@keyframes leftLine {
    0% {
      left: -100%;
    }
    100% {
      left: 100%;
    }
}


.buttons {
  display: flex;
  flex-direction: row;
      flex-wrap: wrap;
  justify-content: center;
  text-align: center;
  width: 100%;
  height: 100%;
  margin: 0 auto;
/*   padding: 2em 0em; */
}



h1 {
  text-align: left;
  color: #444;
  letter-spacing: 0.05em;
  margin: 0 0 0.4em;
  font-size: 1em;
}

p {
  text-align: left;
  color: #444;
  letter-spacing: 0.05em;
  font-size: 0.8em;
  margin: 0 0 2em;
}


.btn {
  letter-spacing: 0.1em;
  cursor: pointer;
  font-size: 14px;
  font-weight: 400;
  line-height: 45px;
  max-width: 160px;
  position: relative;
  text-decoration: none;
  text-transform: uppercase;
  width: 100%;
}
.btn:hover {
  text-decoration: none;
}

/*btn_background*/
.effect01 {
  color: #B2FEFA;
  border: 4px solid #000;
  box-shadow:0px 0px 0px 1px #B2FEFA inset;
  background-color: black;
  overflow: hidden;
  position: relative;
  transition: all 0.3s ease-in-out;
}
.effect01:hover {
  border: 4px solid #666;
  background-color: #FFF;
  box-shadow:0px 0px 0px 4px #EEE inset;
}

/*btn_text*/
.effect01 span {
  transition: all 0.2s ease-out;
  z-index: 2;
}
.effect01:hover span{
  letter-spacing: 0.13em;
  color: #333;
}

/*highlight*/
.effect01:after {
  background: #FFF;
  border: 0px solid #000;
  content: "";
  height: 155px;
  left: -75px;
  opacity: .8;
  position: absolute;
  top: -50px;
  -webkit-transform: rotate(35deg);
          transform: rotate(35deg);
  width: 50px;
  transition: all 1s cubic-bezier(0.075, 0.82, 0.165, 1);/*easeOutCirc*/
  z-index: 1;
}
.effect01:hover:after {
  background: #FFF;
  border: 20px solid #000;
  opacity: 0;
  left: 120%;
  -webkit-transform: rotate(40deg);
          transform: rotate(40deg);
}

</style>

<body>
	
	<div class="container">
		<h2 style="font-weight: bold; color:white">PLATA</h2>
		<a class="highlight" href="create.php" >ADD PLATA</a>
	<table class="table">
	<thead>
		<tr >
		<th class="column1">Total</th>
		<th class="column2">Cod Fiscal</th>
		<th class="column3">Tip Plata</th>
		<th class="column4">Data Plata</th>
		<th class="column5">Durata</th>
		
	</tr>
	</thead>
	<tbody>	
    <?php
      
			if ($result->num_rows > 0) {
				//output data of each row
				while ($row = $result->fetch_assoc()) {
		?>

					<tr>
					<td class="column1"><?php echo $row['Total']; ?></td>
					<td class="column2"><?php echo $row['Cod_Fiscal']; ?></td>
					<td class="column3"><?php echo $row['Tip_Plata']; ?></td>
					<td class="column4"><?php echo $row['Data_Plata']; ?></td>
					<td class="column5"><?php echo $row['Durata']; ?></td>
					<td><a class="buttonblue" href="update.php?Plata_ID=<?php echo $row['Plata_ID']; ?>">Edit</a>&nbsp;<a class="buttonred" href="delete.php?Plata_ID=<?php echo $row['Plata_ID']; ?>">Delete</a></td>
        
        </tr>	
					
    <?php		}
    $result->free();
			}
		?>
	        	
	</tbody>
	</table>
  </div>
  
  <div class="buttons">
      <a href="../dashboard.php" class="btn effect01" target="_blank"><span>Back</span></a>
  
</div>

</body>
</html>