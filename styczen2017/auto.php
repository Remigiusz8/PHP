<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Komis Samochodowy</title>
    <link rel="stylesheet" href="auto.css">
</head>
<body>
    <div class="baner"><h1>SAMOCHODY</h1></div>
    <div class="lewy">
        <h2>Wykaz samochodów</h2>
        <ul>
            <?php
            $connect = mysqli_connect('localhost', 'root', '', 'komis');
            
            if (!$connect) {
                die ('Błąd połączenia z bazą danych');
            }

            $query1 = 'select id, marka, model from samochody';
            $quest1 = mysqli_query($connect, $query1);

            while ($row = mysqli_fetch_array($quest1)) {
                echo '<li>' . $row['id'] . ' ' . $row['marka'] . ' ' . $row['model'] . '</li>';
            }
            ?>
        </ul>
        <h2>Zamówienia</h2>
        <ul>
            <?php
            $query2 = 'select samochody.id as auto, klient from zamowienia inner 
            join samochody on zamowienia.Samochody_id=samochody.id';
            $quest2 = mysqli_query($connect, $query2);

            while ($row2 = mysqli_fetch_array($quest2)) {
                echo '<li>' . $row2['auto'] . ' ' . $row2['klient'] . '</li>';
            }
            ?>
        </ul>
    </div>
    <div class="prawy">
        <h2>Pełne dane: Fiat</h2>
            <?php
            $query3 = 'select * from samochody where marka="Fiat"';
            $quest3 = mysqli_query($connect, $query3);

            while ($row3 = mysqli_fetch_array($quest3)) {
                echo $row3['id'] . ' / ' .  $row3['marka'] . ' / ' . $row3['model'] . ' / ' . $row3['rocznik'] . ' / '
                 . $row3['kolor'] . ' / ' . $row3['stan'] . '<br>';
            }
            mysqli_close($connect);
            ?>
    </div>
    <div class="stopka">
        <table>
            <tr>
                <td><a href="kwerendy.txt">Kwerendy</a></td>
                <td>Autor: Remigiusz Zając</td>
                <td><img src="auto.png" alt="komis samochodowy"></td>
            </tr>
        </table>
    </div>
</body>
</html>