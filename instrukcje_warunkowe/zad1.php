<html>
    <body>
        <?php
        $a = $_POST['wart1'];
        $b = $_POST['wart2'];

        if ($b != NULL && $a != NULL && $b != 0){
            $wynik = $a / $b;
            echo 'Wynik rownania to: ' . $wynik;
        }
        else if ($b == 0){
            echo 'nie dziel przez 0!';
        }
        else {
            echo 'nie zostawiaj pustych pol!';
        }
        ?>
    </body>
</html>