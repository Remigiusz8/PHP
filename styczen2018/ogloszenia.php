<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Portal ogłoszeniowy</title>
    <link rel="stylesheet" href="styl1.css">
</head>
<body>
    <div class="baner"><h1>Portal ogłoszeniowy</h1></div>
    <div class="lewy"><h2>Kategorie ogłoszeń</h2>
    <ol>
        <li>Książki</li>
        <li>Muzyka</li>
        <li>Filmy</li>
    </ol>
    <img src="ksiazki.jpg" alt="Kupię / sprzedam książkę">
    <table>
        <tr>
            <td>Lista ogłoszeń</td>
            <td>Cena ogłoszenia</td>
            <td>Bonus</td>
        </tr>
        <tr>
            <td>1 - 10</td>
            <td>1 PLN</td>
            <td rowspan=3>Subskrybcja newslettera to upust 0,20 PLN na ogłoszenie</td>
        </tr>
        <tr>
            <td>11 - 50</td>
            <td>0,80 PLN</td>
            
        </tr>
        <tr>
            <td>51 i więcej</td>
            <td>0,60 PLN</td>
            
        </tr>
    </table>
    </div>
    <div class="prawy"><h2>Ogłoszenia kategorii książki</h2>
    <?php
    $conn = mysqli_connect('localhost', 'root', '', 'ogloszenia');
    
    if (!$conn) {
        die ('Brak połączenia z bazą');
    }

    $kw1 = 'select id, tytul, tresc from ogloszenie where kategoria=1';
    $kw2 = 'select telefon, ogloszenie.uzytkownik_id from uzytkownik inner join ogloszenie on uzytkownik.id=ogloszenie.uzytkownik_id';
    $query1 = mysqli_query($conn, $kw1);
    $query2 = mysqli_query($conn, $kw2);
    


    while ($row = mysqli_fetch_array($query1)) {
        echo '<h3>' . $row['id'] . ' ' . $row['tytul'] . '</h3><p>' . $row['tresc'] . '</p>';
        $row2 = mysqli_fetch_array($query2);
        echo 'telefon komórkowy: ' . $row2['telefon'];
        
    }
    mysqli_close($conn);
    ?>
    </div>
    <div class="stopka">Portal ogłoszeniowy opracował: Remigiusz Zając</div>
</body>
</html>