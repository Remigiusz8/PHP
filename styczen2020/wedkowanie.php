<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Klub wędkowania</title>
        <link rel="stylesheet" href="styl2.css">
    </head>
    <body>
        <div id="baner"><h2>Wędkuj z nami!</h2></div>
        <div id="lewy"><img src="ryba2.jpg" alt="Szczupak"></div>
        <div id="prawy"><h3>Ryby spokojnego żeru (białe)</h3></br>
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'wedkowanie');
        if(!$conn) {
            die ("błąd połączenie z bazą danych");
        }
        
        $zapytanie = 'select nazwa, id, wystepowanie from ryby where styl_zycia=2';
        $q = mysqli_query($conn, $zapytanie);
        while ($row = mysqli_fetch_assoc($q)) {
            echo $row['id'] . '. ' . $row['nazwa'] . ', występuje w: ' . $row['wystepowanie'] . '<br>';
        }




        mysqli_close($conn);
        ?>
    
    
    
        </br>
        <ol><li><a href="https://wedkuje.pl/" target="_blank">Odwiedź także</a></li>
        <li><a href="http://www.pzw.org.pl/" target="_blank">Polski Związek Wędkarski</a></li>
        </ol>
        </div>
        <div id="stopka"><p>Stronę wykonał: PESEL</p></div>
        
    </body>
</html>