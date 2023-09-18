<html>
    <body>
        <?php
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

        if ($a == NULL || $b == NULL || $c == NULL){
            echo 'nie pozostawiaj pustego pola';
        } elseif ($a > $b && $a > $c && $b > $c){
            echo $c . ' ' . $b . ' ' . $a;
        } elseif ($a > $b && $a > $c && $b < $c){
            echo $b . ' ' . $c . ' ' . $a;
        } elseif ($a < $b && $b > $c && $c > $a){
            echo $a . ' ' . $c . ' ' . $b;
        } elseif ($a < $b && $b > $c && $c < $a){
            echo $c . ' ' . $a . ' ' . $b;
        }elseif ($c > $b && $c > $a && $b > $a){
            echo $a . ' ' . $b . ' ' . $c;
        }elseif ($c > $b && $c > $a && $b < $a){
            echo $b . ' ' . $a . ' ' . $c;
        }

        ?>
</body>
</html>