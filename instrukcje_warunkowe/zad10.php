<html>
    <?php
    $a = $_POST['a'];

    if (preg_match('/[0-9]/',$a)){
        echo 'liczba';
    } elseif (preg_match('/[a-z]/',$a)){
        echo 'mala litera';
    }elseif (preg_match('/[A-Z]/',$a)){
        echo 'duza litera';
    }else {
        echo 'znak specjalny';
    }

    //preg_match('/[`~!@#$%^&*()_+-={[}\]|:;",<.>?]/', $a)
    ?>
</html>