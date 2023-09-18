<html>

<?php
//Pobieramy dane z formularza metodą POST
$tytul = $_POST["tytul"];
$isbn = $_POST["isbn"];
$autor = $_POST["autor"];
$wydawnictwo = $_POST["wydawnictwo"];
$rok_wyd = $_POST["rok_wyd"];
$streszczenie = $_POST["streszczenie"];

//Tworzymy zapytanie SQL
$zapytanie = "INSERT into ksiazka(isbn, tytul, autor, wydawnictwo, rok_wyd, streszczenie) values ('$isbn', '$tytul', '$autor', '$wydawnictwo', '$rok_wyd', '$streszczenie')";
/* Łączymy się z serwerem */

$link = mysqli_connect(
            'localhost',  /* nazwa komputera, na którym działa MySQL */
            'root',       /* nazwa użytkownika */
            '',   /* hasło */
            'biblioteka');     /* domyślna baza danych */
if (!$link) {
   die("Brak połączenia z serwerem MySQL.");
}
/*
Zmienna $link będzie naszym uchwytem do nawiązanego połączenia. 
Jeżeli połączenie zostanie ustanowione, jej wartością będzie prawda, 
w przeciwnym razie wartością zmiennej będzie fałsz. 
Za pomocą warunku IF sprawdzamy, czy udało się połączyć z bazą danych 
i jeżeli nie, zwracamy kod błędu i przerywamy działanie skryptu.
*/


/* Wykonujemy zapytanie */
	mysqli_set_charset($link, "utf8_bin");
	$wynik = mysqli_query($link, $zapytanie);
    
	
	
	echo "
	<html>
	<meta charset=UTF-8>
	<head></head>
	<body>
	<link rel=stylesheet href=style.css>
	<p><b>Wpisane wartości: </b>" . "<br>" . "ISBN: " . $isbn . "<br>" . "Tytuł: " . $tytul . "<br>" . "Autor: " . $autor . "<br>" . "Wydawnictwo: " . $wydawnictwo . "<br>" . "Rok wydania: " . $rok_wyd . "<br>" . "Streszczenie: " . $streszczenie . "</p>
	</body>
	</html>";
	
    /* Przetwarzanie wierszy wyniku zapytania */
 //   while( $row = mysqli_fetch_assoc($wynik) ){
 //       echo ($row['tytul'].", ". $row['autor'].", ". $row['wydawnictwo']);
  //  }
    /* Usuwamy z pamięci wynik zapytania */
//    mysqli_free_result($wynik);

/*
Zwróć uwagę na kilka kwestii:

Zmienna $wynik zawiera wynik zapytania.
Do wykonania zapytania (wywołania procedury mysqli_query) 
wymagane jest otwarte połączenie z bazą.
Przekazana jako parametr wywołania instrukcja języka SQL 
jest umieszczona w apostrofach i nie jest zakończona średnikiem.
Ze względu na prostotę i wydajność sortowaniem danych zajął się MySQL.
Zapytanie zwraca tylko potrzebne dane.
Wynik zapytania jest zapisywany w postaci tablicy (procedura mysqli_fetch_assoc), 
której kolejne wiersze będą wyświetlone na ekranie.
Po przetworzeniu (np. wypełnieniu tabeli) wynik zapytania jest usuwany, 
a pamięć zwalniana.
*/
mysqli_close($link) ;
?>

</html>

