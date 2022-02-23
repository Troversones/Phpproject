<html lang="hu">

<head>
	<title>Diákmunka - Regisztráció</title>
	<link rel="stylesheet" type="text/css" href="diakmunka.css">

</head>

<body>
	<div id="container">
		<header>
			Diákmunka - Regisztráció
		</header>
		<div id="menu">
			<table>
				<tr>
					<td><a href="index.html">Kezdőoldal</a></td>
					<td><a href="diakmunkak.php">Diákmunkák</a></td>
					<td><a href="">Cégek</a></td>
					<td><a href="regisztracio.php">Regisztráció</a></td>
					<td><a href="">Kapcsolat</a></td>
				</tr>
			</table>
		</div>
		<div id="content">
			<br><br>
			<form action='' method='POST' name='regisztracio'>
				<table>
					<tr>
						<td>E-mail megadása:</td>
						<td><input type="email" name='email' required></td>
					</tr>
					<tr>
						<td>Név:</td>
						<td><input type="text" name='nev' required></td>
					</tr>
					<tr>
						<td>Cím:</td>
						<td><input type="text" name='cim' required></td>
					</tr>
					<tr>
						<td>Telefon:</td>
						<td><input type="text" name='telefon' required></td>
					</tr>

					<tr>
						<td><br><input type="submit" name="gomb" value
						="diák felvezetése"></td>
					</tr>
				</table>
			</form>
			<?php
			if (isset($_POST['gomb'])) {
				require('connect.php');
				dbcon();
				$query = "SELECT email FROM regisztracio WHERE email='$_POST[email]'";
				$eredm = mysqli_query($con, $query);
				if (strlen($_POST['email']) > 50 || strlen($_POST['nev']) == 0 || strlen($_POST['cim']) > 50 || strlen($_POST['telefon']) > 11) {
					if (strlen($_POST['email']) > 50) {
						echo "<script type='text/javascript'>
						 alert('Hibás Email!');
					 </script>";
					} else {
					}

					if (strlen($_POST['nev']) == 0) {
						echo "<script type='text/javascript'>
						 alert('Hibás név!');
					 </script>";
					} else {
					}

					if (strlen($_POST['cim']) > 50) {
						echo "<script type='text/javascript'>
						 alert('Hibás cím!');
					 </script>";
					} else {
					}

					if (strlen($_POST['telefon']) > 11) {
						echo "<script type='text/javascript'>
						 alert('Hibás telefon!');
					 </script>";
					} else {
					}
				} elseif (mysqli_num_rows($eredm) != 0) {
					echo "<script type='text/javascript'>alert ('Már rögzítve lett diák ezzel az e-mail címmel!');</script>";
				} else {


					$query = "INSERT INTO regisztracio VALUES('$_POST[email]','$_POST[nev]','$_POST[cim]','$_POST[telefon]')";
					mysqli_query($con, $query);
					echo "<script type='text/javascript'>alert ('Sikeres regisztráció!');</script>";
				}
			}


			?>
		</div>
		<div id="footer">
			<P>6900, Makó Posta utca 6.</p>
			<p> 06 (70) 555-5555 </p>
			<p> Nyitvatartás rend hétfőtől péntekig 10:00-18:00 óráig</P>
			<p id="gangstashit"></p>
		</div>
	</div>
	<script src="hehealgohol.js"></script>
</body>

</html>