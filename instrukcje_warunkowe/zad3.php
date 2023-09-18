<html>
    <body>
        <?php
        $a = $_POST['a'];
        $b = $_POST['b'];

        if ($a != NULL && $b != 4 && $b != NULL) {
            $dzialanie = ($a + 6) / ($b - 4);
            echo 'Wynik to: ' . $dzialanie;
        } elseif ($b == 4) {
            echo 'Nie wprowadzaj 4, ponieważ w mianowniku bedzie 0!';
        } else {
            echo 'Nie pozostawiaj pustych pol!';
        }
        ?>
    </body>
</html>