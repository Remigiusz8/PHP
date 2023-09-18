<html>
    <body>
        <?php
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        if ($a == NULL || $b == NULL || $c == NULL) {
            echo 'nie pozostawiaj pustych pol';
        }elseif ($a > $b && $a > $c) {
            echo 'liczba ' . $a . ' jest najwieksza';
        }elseif ($b > $a && $b > $c) {
            echo 'liczba ' . $b . ' jest najwieksza';
        }elseif ($c > $a && $c > $b) {
            echo 'liczba ' . $c . ' jest najwieksza';
        }elseif ($a == $b){
            echo 'liczba ' . $a . ' jest najwieksza';
        }elseif ($a == $c){
            echo 'liczba ' . $a . ' jest najwieksza';
        }elseif ($c == $b){
            echo 'liczba ' . $c . ' jest najwieksza';
        }else {
            echo 'liczba ' . $a . ' jest najwieksza';
        }

        ?>
</body>
</html>