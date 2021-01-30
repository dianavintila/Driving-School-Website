<?php 
include "config.php";

// Realixarea unui update la tabela PLATA

// dacă se face clic pe butonul de actualizare al formularului, trebuie să procesăm formularul
	if (isset($_POST['update'])) {
	
    $total = $_POST['Total'];
		$cod = $_POST['Cod_Fiscal'];
		$type_payment = $_POST['Tip_Plata'];
    $data = $_POST['Data_Plata'];
    $time = $_POST['Durata'];
    $plata_id = $_POST['plata_id'];
 
		
	
		// scrierea unei interogari care produce update
		$sql = "UPDATE `plata` SET `Total`='$total', `Cod_Fiscal`='$cod', `Tip_Plata`='$type_payment', `Data_Plata`='$data',  `Durata`='$time' WHERE `Plata_ID`='$plata_id'";

		//executia interogarii
		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "Record updated successfully.";
		}else{
			echo "Error:" . $sql . "<br>" . $conn->error;
		}
	}


// dacă variabila „id” este setată în URL, știm că trebuie să edităm o înregistrare
if (isset($_GET['Plata_ID'])) {
	$plata_id = $_GET['Plata_ID'];

		//scirerea interogarii pentru a obtine datele din tabelul plata 
	$sql = "SELECT * FROM `plata` WHERE `Plata_ID`='$plata_id'";

	//executia interogarii
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
      $total = $row['Total'];
      $cod = $row['Cod_Fiscal'];
      $type_payment = $row['Tip_Plata'];
      $data = $row['Data_Plata'];
      $time = $row['Durata'];
			$id = $row['Plata_ID'];
		}

	?>
		<h2>Update Plata</h2>
		<form action="" method="post">
		  <fieldset>
		   
		  Total:<br>
		  <input type="text" name="Total" value="<?php echo $total; ?>">
		  <input type="hidden" name="plata_id" value="<?php echo $id; ?>">
			<br>
			Cod Fiscal:<br>
		    <input type="text" name="Cod_Fiscal" value="<?php echo $cod; ?>">
			<br>
			Tip Plata:<br>
		    <input type="text" name="Tip_Plata" value="<?php echo $type_payment; ?>">
			<br>
			Data Plata:<br>
		    <input type="text" name="Data_Plata" value=<?php echo $data; ?>>
			<br>
			Durata:<br>
		    <input type="text" name="Durata" value=<?php echo $time; ?>>
			<br>
			<input type="submit" value="Update" class="button" style="margin-top: 5px"  name="update">
		  </fieldset>
		</form>

		</body>
		</html>




	<?php
	} else{
	// dacă valoarea „id” nu este validă, utilizatorul este redirectionat înapoi la pagina view.php
  header('Location: view.php');
	}

}
?>


<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Update</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    html {
    max-height: 768px;
    padding-left: 5%;
   }

    body{
    background: #11998e;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #38ef7d, #11998e);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #38ef7d, #11998e); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

	}
	input{border-radius: 25px;
		text-indent: 10px;
		
	}
	
    

  .button {
  min-width: 180px;
  min-height: 30px;
  font-family: 'Nunito', sans-serif;
  font-size: 22px;
  text-transform: uppercase;
  letter-spacing: 1.3px;
  font-weight: 700;
  color: #313133;
  background: #4FD1C5;
  background: linear-gradient(90deg,  #6DD5FA, #70e1f5);
  border: none;
  border-radius: 1000px;
  box-shadow: 12px 12px 24px #2980B9;
  transition: all 0.3s ease-in-out 0s;
  cursor: pointer;
  outline: none;
  position: relative;
  padding: 10px;
  }

  button::before {
  content: '';
  border-radius: 1000px;
  min-width: calc(300px + 12px);
  min-height: calc(60px + 12px);
  border: 6px solid #00FFCB;
  box-shadow: 0 0 60px rgba(0,255,203,.64);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  opacity: 0;
  transition: all .3s ease-in-out 0s;
}

.button:hover, .button:focus {
  color: #313133;
  transform: translateY(-6px);
}

button:hover::before, button:focus::before {
  opacity: 1;
}

button::after {
  content: '';
  width: 30px; height: 30px;
  border-radius: 100%;
  border: 6px solid #00FFCB;
  position: absolute;
  z-index: -1;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  animation: ring 1.5s infinite;
}

button:hover::after, button:focus::after {
  animation: none;
  display: none;
}

@keyframes ring {
  0% {
    width: 30px;
    height: 30px;
    opacity: 1;
  }
  100% {
    width: 300px;
    height: 300px;
    opacity: 0;
  }
}


.wrapper {
  display: flex;
  justify-content: center;
  position: absolute;
  right: 100px;
  top: 150px;
}

.cta {
    display: flex;
    padding: 10px 35px;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;
    font-size: 30px;
    color: white;
    background: #6225E6;
    transition: 1s;
    box-shadow: 6px 6px 0 black;
    transform: skewX(-15deg);
}

.cta:focus {
   outline: none; 
}

.cta:hover {
    transition: 0.5s;
    box-shadow: 10px 10px 0 #FBC638;
}

.cta span:nth-child(2) {
    transition: 0.5s;
    margin-right: 0px;
}

.cta:hover  span:nth-child(2) {
    transition: 0.5s;
    margin-right: 45px;
}

  span {
    transform: skewX(15deg) 
  }

  span:nth-child(2) {
    width: 20px;
    margin-left: 30px;
    position: relative;
    top: 12%;
  }
  
/**************SVG****************/

  path.one {
    transition: 0.4s;
    transform: translateX(-60%);
  }

  path.two {
    transition: 0.5s;
    transform: translateX(-30%);
  }

  .cta:hover path.three {
    animation: color_anim 1s infinite 0.2s;
  }

  .cta:hover path.one {
    transform: translateX(0%);
    animation: color_anim 1s infinite 0.6s;
  }

  .cta:hover path.two {
    transform: translateX(0%);
    animation: color_anim 1s infinite 0.4s;
  }

/* SVG animations */

  @keyframes color_anim {
    0% {
        fill: white;
    }
    50% {
        fill: #FBC638;
    }
    100% {
        fill: white;
    }
  } 
    

    </style>
</head>

<body>


<div class="wrapper">
  <a class="cta" href="view.php">
    <span> PLATA</span>
    <span>
      <svg width="50px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <path class="one" d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z" fill="#FFFFFF"></path>
          <path class="two" d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z" fill="#FFFFFF"></path>
          <path class="three" d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z" fill="#FFFFFF"></path>
        </g>
      </svg>
    </span> 
  </a>
</div>

</body>
</html>
