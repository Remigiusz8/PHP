<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Video On Demand</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <div class="lewy"><h1>Internetowa wypożyczalnia filmów</h1></div>
    <div class="prawy">
        <table>
            <tr>
                <td>Kryminał</td>
                <td>Horror</td>
                <td>Przygodowy</td>
            </tr>
            <tr>
                <td>20</td>
                <td>30</td>
                <td>20</td>
            </tr>
        </table>
    </div>
    <div class="glowny1"><h3>Polecamy</h3>
        <?php
            $connect = mysqli_connect('localhost', 'root', '', 'dane3');
            $q = 'select id, nazwa, opis, zdjecie from 
            produkty where id=18 or id=22 or id=23 or id=25';
            $quest = mysqli_query($connect, $q);

            while ($row = mysqli_fetch_array($quest)){
                echo '<div class="film"><h4>' . $row['id'] . '. ' 
                . $row['nazwa'] . "<img src='$row[zdjecie]' 
                alt='film'>" . '<p>' . $row['opis'] . '</p>' . '</h4></div>';
            }
        ?>
    </div>
    <div class="glowny2"><h3>Filmy fantastyczne</h3>
        <?php
            $q2 = 'select id, nazwa, opis, zdjecie 
            from produkty where rodzaje_id=12';
            $quest2 = mysqli_query($connect, $q2);

            while ($row2 = mysqli_fetch_array($quest2)){
                echo '<div class="film"><h4>' . $row2['id'] . '. ' 
                . $row2['nazwa'] . "<img src='$row2[zdjecie]' 
                alt='film'>" . '<p>' . $row2['opis'] . '</p>' . '</h4></div>';
            }
        ?>
    </div>
    <div class="stopka">
        <form action="video.php" method="POST">
            <label for="j">Usuń film nr.:</label> 
            <input type="number" name="a" id="j">
            <input type="submit" value="Usuń film">
        </form>
        <?php
            if (isset($_POST['a'])) {

                $a = $_POST['a'];
                $q3 = "delete from produkty where id='$a'";
                $quest3 = mysqli_query($connect, $q3);
                mysqli_close($connect);
            } 
        ?>
        Stronę wykonał: <a href="mailto: ja@poczta.com">Remigiusz Zając</a>
    </div>
</body>
</html>