<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Organizer</title>
        <link rel="stylesheet" href="styl6.css">
    </head>
    <body>
        <div id="baner1">
            <h2>MÓJ ORGANIZER</h2>
        </div>

        <div id="baner2">
            <form action="organizer.php" method="POST">
                Wpis wydarzenia: <input type="text" name="a">
                <input type="submit" value="ZAPISZ">
            </form>
        </div>

        <div id="baner3">
            <img src="logo2.png" alt="Mój organizer">
        </div>
        
        <?php
            $con = mysqli_connect('localhost', 'root', '', 'egzamin6');

            if (!$con) {
                die ("Nie można połączyć się z bazą");
            }

            $a = $_POST['a'];
            $zapytanie = "update zadania set wpis= '$a' where dataZadania='2020-08-27'";
            $wyn = mysqli_query($con, $zapytanie);
            $zapytanie1 = "select dataZadania, miesiac, wpis from zadania where miesiac='sierpien'";
            $quest = mysqli_query($con, $zapytanie1);
            
            while ($wynik = mysqli_fetch_assoc($quest)) {
                echo '<div id="glowny">' . '<h6>' . $wynik['dataZadania'] . ', ' . $wynik['miesiac'] . '</h6>' . '<p>' . $wynik['wpis'] . '</p>' . '</div>';
            }
            
            mysqli_close($con);
        ?>

        <div id="stopka">
            <?php
                $con = mysqli_connect('localhost', 'root', '', 'egzamin6');

                if (!$con) {
                    die ("Nie można połączyć się z bazą");
                }
                
                $pyt = 'select miesiac, rok from zadania where dataZadania="2020-08-01"';
                $zapytanie2 = mysqli_query($con, $pyt);
                $wynik2 = mysqli_fetch_assoc($zapytanie2);
                echo '<h1>miesiac: ' . $wynik2['miesiac'] . ', rok: ' . $wynik2['rok'] . '</h1>';
            ?>
            <br><p>Stronę wykonał: Remigiusz Zając</p>
        </div>
    </body>
</html>