<html>

	<head>

		<link rel="stylesheet" href="style.css">
		<meta charset="UTF-8">
		
	</head>

	<body>

		<?php
		
			$host = "localhost";
			$user = "root";
			$password = "";
			$database = "szkola";

			$con = mysqli_connect($host, $user, $password, $database);
			
				if (! $con){
					die ("Nie udało się połączyć z bazą");
				}
					
			$zapytanie = "SELECT nazwa from klasa";
			$wynik = mysqli_query($con, $zapytanie);
			$ilewynikow = mysqli_num_rows($wynik);
			echo "Liczba klas: " . $ilewynikow . "<br>";
			echo "<br>Klasy: <br>";
			echo "<form method='POST' action='wyniki.php'>";
			echo "<select name = 'lista_klas'>";
			
				while ($wiersz = mysqli_fetch_array($wynik)) {
					echo "<option><span class='new'>";
					echo $wiersz[0]."<br>";
					echo "</span></option>";
				}
				
			echo "</select><br><br>";
			echo "<input type='submit'>";
			echo "</form>";
			mysqli_close($con);
		
		?>
		
	</body>

</html>