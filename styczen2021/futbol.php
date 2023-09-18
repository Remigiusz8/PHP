<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">
        <title>Rozgrywki futbolowe</title>
        <link rel="stylesheet" href="styl.css">

    </head>

    <body>

        <div id="baner">

            <h2>Światowe rozgrywki piłkarskie</h2>
            <img src="obraz1.jpg" alt="boisko">

        </div>
        
        <?php

            $pozycje = $_POST['pozycje'];
            $conn = mysqli_connect('localhost', 'root', '', 'egzamin');

            if (!$conn) {
                die ("Błąd połączenia się z bazą danych");
            }

            $zapytanie = "select zespol1, zespol2, wynik, data_rozgrywki from rozgrywka where zespol1='EVG'";
            $quest = mysqli_query($conn, $zapytanie);

            while ($row = mysqli_fetch_assoc($quest)) {
                echo '<div id="mecze">' . '<h3>' . $row['zespol1'] . '-' . $row['zespol2'] . '</h3>' . '<br>' . '<h4>' . $row['wynik'] . '</h4><p>w dniu: ' . $row['data_rozgrywki'] . '</p>' . '</div>';
            }

        ?>
        
        <div id="glowny">

            <h2>Reprezentacja Polski</h2>

        </div>

        <div id="lewy">
            
            <p>Podaj pozycję zawodników (1-bramkarze, 2-obrońcy, 3-pomocnicy, 4-napastnicy):</p><br>
            
            <form action="futbol.php" method="POST">
                <input type="number" name="pozycje">
                <input type="submit" value="sprawdź">
                <ul>
                <?php

                $zapytanie2 = "select imie, nazwisko from zawodnik inner join pozycja on zawodnik.pozycja_id = pozycja.id where pozycja.id='$pozycje'";
                $quest2 = mysqli_query($conn, $zapytanie2);

                while ($wyn = mysqli_fetch_assoc($quest2)) {
                    echo '<li><p>' . $wyn['imie'] . ' ' . $wyn['nazwisko'] . '</p>'; 
                }
                
                mysqli_close($conn);
                ?>

                </li>
                </ul>
            </form>

        </div>

        <div id="prawy">
            <img src="zad1.png" alt="piłkarz"><br>
            <p>Autor: Remigiusz Zając</p>
        </div>

    </body>
    
</html>