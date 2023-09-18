<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Wędkujemy</title>
        <link rel="stylesheet" href="styl_1.css">
    </head>
    <body>
    <div class="baner"><h1>Portal dla wędkarzy</h1></div>
    <div class="lewy"><h2>Ryby drapieżne naszych wód</h2>
    
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'wedkowanie');
    if (!$conn) {
        die ("Błąd połączenia z bazą");
    }
    $pytanie = "select nazwa, wystepowanie from ryby where styl_zycia=1";
    $quest = mysqli_query($conn, $pytanie);
    
    echo "<ul>";

    while ($row = mysqli_fetch_assoc($quest)) {
        echo "<li>" . $row['nazwa'] . ", występowanie: " . $row['wystepowanie'] . "</li>";
    }

    echo "</ul>";

    mysqli_close($conn);
    ?>  
    
    </div>
    <div class="prawy">
        <img src="ryba1.jpg" alt="Sum"></br>
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>
    <div class="stopka"><p>Stronę wykonał: PESEL</p></div>
    

    
    </body>
    
</html>


