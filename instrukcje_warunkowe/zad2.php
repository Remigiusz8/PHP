<html>
    <body>
        <?php

        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        $d = $_POST['d'];

        if ($b != 0 && $d !=0 && $b != NULL && $d != NULL) {
            $dzialanie = $a / $b + $c / $d;
            echo 'wynik to: ' . $dzialanie;
        } elseif ($b == 0 || $d == 0) {
            echo 'nie dziel przez 0!';
        } else {
            echo 'nie pozostawiaj pustych pol!';
        }

        ?>
    </body>
</html>