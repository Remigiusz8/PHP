<html>
    <body>
        <?php
        $a = $_POST['dzien'];
        $b = $_POST['msc'];
        $c = $_POST['rok'];
        $arr = explode ("-",date("Y-m-d"));
        $arr[0] -= 18;
        //print_r($arr);

        if ($a == NULL || $b == NULL || $c == NULL){
            echo 'nie pozostawiaj pustych pol';
        } elseif ($c > (int)$arr[0]){
            echo 'jestes niepelnoletni';
        } elseif ($c < (int)$arr[0]){
            echo 'jestes pelnoletni';
        }elseif ($b > (int)$arr[1]){
            echo 'jestes niepelnoletni';
        }elseif ($b < (int)$arr[1]){
            echo 'jestes pelnoletni';
        }elseif ($a <= (int)$arr[2]){
            echo 'jestes pelnoletni';
        }else {
            echo 'jestes niepelnoletni';
        }

        ?>
</body>
</html>