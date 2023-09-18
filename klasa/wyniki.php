<html>

	<head>
	
		<link rel="stylesheet" href="style.css">
		<meta charset="UTF-8">
	
	</head>
	
	<body>
	
		<?php

			$klasa = $_POST['lista_klas'];
			echo "<p>Klasa: " . $klasa . "</p>";
			
			$zapytanie = "select imie, nazwisko from wychowawca inner join klasa on klasa.id = wychowawca.id_klasy where klasa.nazwa = '$klasa'";
			$lista = "select imie, nazwisko from uczen inner join klasa on klasa.id = uczen.id_klasy where klasa.nazwa = '$klasa'";
			
			$host = "localhost";
			$user = "root";
			$password = "";
			$database = "szkola";

			$con = mysqli_connect($host, $user, $password, $database);
			
				if (! $con){
					die ("Nie udało się połączyć z bazą");
				}
					
			$wyniki = mysqli_query($con, $zapytanie);
			$wiersz = mysqli_fetch_array($wyniki);
			echo "<br>Wychowawca klasy: " . $klasa . " jest " . $wiersz[0] . " " . $wiersz[1] . "<br><br>";
			
			$ile = mysqli_num_rows($uczniowie);
			$uczniowie = mysqli_query($con, $lista);
			echo<<<END

	<table>
		<thead>
			<tr><th>Imię</th>
			<th>Nazwisko</th>
			<th>Średnia ocen</th></tr>
		</thead>
		<tbody>
		
END;
			$suma = 0;
				
						while($obj = mysqli_fetch_array($uczniowie))
						{
							
							echo "\r\n\t\t\t<tr><td>".$obj[0]."</td><td>".$obj[1]."</td><td>".$obj[2]."</td></tr>";
							
							//$suma += $obj->Srednia_ocen;
						
						}
						
						//$lista->free();
						
						echo<<<END
\r\n
		</tbody>
	</table>

END;
			echo "\t<p>Średnia klasy: ".round($suma/$ile,2)."</p>";
			mysqli_close($con);
		
		?>
	
	</body>
	
</html>