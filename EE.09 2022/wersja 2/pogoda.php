<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Prognoza pogody Wrocław</title>
    <link rel="stylesheet" href="styl2.css">
</head>
<body>
    <div class="baner1"><img src="logo.png" alt="meteo"></div>
    <div class="baner2"><h1>Prognoza dla Wrocławia</h1></div>
    <div class="baner3"><p>maj, 2019 r.</p></div>
    <div class="glowny">
        <table>
            <tr>
                <th>DATA</th>
                <th>TEMPERATURA W NOCY</th>
                <th>TEMPERATURA W DZIEŃ</th>
                <th>OPADY [mm/h]</th>
                <th>CIŚNIENIE [hPa]</th>
            </tr>
            <?php
                $c = mysqli_connect('localhost', 'root', '', 'prognoza');
                $q = 'select * from pogoda where miasta_id = 1 order by data_prognozy asc';
                $que = mysqli_query($c, $q);

                while ($row = mysqli_fetch_array($que)) {
                    echo '<tr><td>' . $row['data_prognozy'] . '</td><td>' . $row['temperatura_noc']
                     . '</td><td>' . $row['temperatura_dzien'] . '</td><td>' . $row['opady']
                     . '</td><td>' . $row['cisnienie'] . '</td></tr>';
                }

            ?>
        </table>
    </div>
    <div class="lewy"><img src="obraz.jpg" alt="Polska, Wrocław"></div>
    <div class="prawy"><a href="kwerendy.txt">Pobierz kwerendy</a></div>
    <div class="stopka"><p>Stronę wykonał: Remigiusz Zając</p></div>
</body>
</html>