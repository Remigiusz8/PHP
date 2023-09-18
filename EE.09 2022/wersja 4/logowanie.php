<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Forum o psach</title>
    <link rel="stylesheet" href="styl4.css">
</head>
<body>
    <div class="baner"><h1>Forum wielbicieli psów</h1></div>
    <div class="lewy"><img src="obraz.jpg" alt="foksterier"></div>
    <div class="prawy1"><h2>Zapisz się</h2>
        <form action="logowanie.php" method="POST">
            login: <input type="text" name="login"><br>
            hasło: <input type="password" name="haslo"><br>
            powtórz hasło: <input type="password" name="phaslo"><br>
            <input type="submit" value="Zapisz">
        </form>
        <?php
        $con = mysqli_connect('localhost', 'root', '', 'psy');
        if (isset($_POST['login']) || isset($_POST['haslo']) || isset($_POST['phaslo'])) {
            
            $a = $_POST['login'];
            $b = $_POST['haslo'];
            $c = $_POST['phaslo'];
            $o = mysqli_num_rows($a);
            $y = mysqli_num_rows($b);

            if ($a == '' || $b == '' || $c == '') {
                echo '<p>wypełnij wszystkie pola</p>';
            } else if ($o != 0) {
                echo '<p>login występuje w bazie danych, konto nie zostało dodane</p>';
            }
        }
        
        ?>
    </div>
    <div class="prawy2"><h2>Zapraszamy wszystkich</h2>
    <ol>
        <li>właścicieli psów</li>
        <li>weterynarzy</li>
        <li>tych, co chcą kupić psa</li>
        <li>tych, co lubią psy</li>
    </ol>
    <a href="regulamin.html">Przeczytaj regulamin forum</a>
    </div>
    <div class="stopka">Stronę wykonał: Remigiusz Zając</div>
</body>
</html>