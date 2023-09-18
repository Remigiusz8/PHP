<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <title>Dziennik szkolny</title>
	
    <meta http-equiv="X-Ua-Compatible" content="IE=edge">
    <link rel="stylesheet" href="main.css">

</head>

<body>

	<form action="index.php" method="post">
	
		<label>
			Podaj nazwę klasy: <input type="select" name="klasa">
		</label>
		
		<input type="submit" value="Pokaż oceny">
	
	</form>

<?php

	if(isset($_POST["klasa"]))
	{
		
		if(empty($_POST["klasa"]))
		{
			echo '<span style="color:yellow;">Nie podano nazwy klasy!</span>';
		}
		else
		{
			require_once "dbconnect.php";
			
			$conn = mysqli_connect($host, $user, $pass, $db) or die("Błąd połączenia!");
			
			mysqli_set_charset($conn, "utf8");
			
			/*if(!$conn)
			{
				echo "Błąd połączenia!";
			}
			else
			{
				echo "Hurra!";
			}*/
			
			$klasa = $_POST["klasa"];		
			
			$q = "SELECT Imie, Nazwisko, Srednia_ocen FROM uczen, klasa WHERE nazwa='$klasa' AND klasa.id = uczen.id_klasy";
			
			$result = mysqli_query($conn, $q) or die("Problemy z odczytem danych!");
			
			$ile = mysqli_num_rows($result);
			
			if($ile == 0)
			{
				echo '<span style="color:red;">Nie ma takiej klasy w szkole!</span>';
			}
			else
			{
				
echo<<<END

	<table>
		<thead>
			<tr>
				<th>Imię</th>
				<th>Nazwisko</th>
				<th>Średnia ocen</th>
			</tr>
		</thead>
		<tbody>
		
END;
				$suma = 0;
				
				while($row = mysqli_fetch_assoc($result))
				{
					echo "\r\n\t\t\t<tr>";
					foreach($row as $col)
					{
						echo "<td>$col</td>";

					}
					echo "</tr>";
					
					$suma += $row['Srednia_ocen'];
					
					//echo "\r\n\t\t\t<tr><td>".$row['Imie']."</td><td>".$row['Nazwisko']."</td><td>".$row['Srednia_ocen']."</td></tr>";
				}
echo<<<END
\r\n
		</tbody>
	</table>
END;
			
				echo "<p>Średnia klasy: ".round($suma/$ile, 2)."</p>";
			
			}
			
			mysqli_close($conn);			
			
		}
		
		
	}
	

	
?>

</body>
</html>