<!DOCTYPE html>
<html>

    <head>
        <meta charset="UTF-8">
        <title>Szkoła ponadgimnazjalna</title>
        <link rel="stylesheet" href="styl.css">
    </head>

    <body>

        <div id="baner">
            <h1>Oceny uczniów: język polski</h1>
        </div>

        <div id="lewy">
            <h2>Lista uczniów:</h2>
            <ol>

                <?php
                $conn = mysqli_connect('localhost', 'root', '', 'szkola');

                if (!$conn) {
                    die ("Błąd połączenia z bazą danych");
                }

                $zapytanie1 = 'select imie, nazwisko from uczen';
                $quest1 = mysqli_query($conn, $zapytanie1);

                while($row = mysqli_fetch_assoc($quest1)) {
                    echo '<li>' . $row['imie'] . ' ' . $row['nazwisko'] . '</li>';
                }

                ?>

            </ol>
        </div>

        <div id="prawy">
            <h2>Uczeń: 

                <?php
                $zapytanie2 = 'select imie, nazwisko from uczen where id=2';
                $quest2 = mysqli_query($conn, $zapytanie2);

                $row2 = mysqli_fetch_assoc($quest2);
                echo $row2['imie'] . ' ' . $row2['nazwisko'];

                ?>

            </h2>
            <p>Średnia ocen z języka polskiego: 
                <?php
                $zapytanie3 = 'select round(avg(ocena), 2) as srednia from ocena inner join uczen on
                ocena.uczen_id=uczen.id where ocena.przedmiot_id=1 and uczen.id=2';
                $quest3 = mysqli_query($conn, $zapytanie3);

                $row3 = mysqli_fetch_assoc($quest3);
                echo $row3['srednia'];

                mysqli_close($conn);
                ?>
            </p>
        </div>

        <div id="stopka">
            <h3>Zespół Szkół Ponadgimnazjalnych</h3>
            <p>Stronę opracował: Remigiusz Zając</p>
        </div>

    </body>
</html>