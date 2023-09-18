<html>
    <body>
        <?php
        $a = $_POST['a'];

        if ($a == NULL) {
            echo 'nie pozostawiaj pustego pola';
        } elseif ($a == 0) {
            echo 'liczba ' . $a . ' jest rowna 0';
        } elseif ($a < 0) {
            echo 'liczba ' . $a . ' jest ujemna';
        } else {
            echo 'liczba ' . $a . ' jest dodatnia';
        }


        ?>
    </body>
</html>