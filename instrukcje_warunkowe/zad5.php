<html>
    <body>
        <?php
        $a = $_POST['a'];
        $b = $_POST['b'];

        if ($a == NULL || $b == NULL){
            echo 'nie zostawiaj pustych pol';
        } elseif ($b == 0) {
            echo 'nie dziel przez 0!';
        } elseif ($a < $b || $a % $b != 0) {
            echo 'liczba ' . $a . ' nie jest podzielna przez liczbe ' . $b;
        } else {
            echo 'liczba ' . $a . ' jest podzielna przez liczbe ' . $b;
        }
        ?>
    </body>
</html>