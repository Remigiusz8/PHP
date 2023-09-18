<html>
    <body>
        <?php
        $a = $_POST['a'];

        if ($a == NULL){
            echo 'nie zostawiaj pustego pola!';
        }
        elseif ($a == 0) {
            echo 'zero nie jest liczba parzysta ani nieparzysta';
        } elseif ($a % 2 == 0) {
            echo 'liczba parzysta';
        } else {
            echo 'liczba nieparzysta';
        }
        ?>
    </body>
</html>