<html>
    <body>
        <form method="POST">
            Wprowadz wzrost (w m) &nbsp;<input type=text name=cyfra1>
            <br>
            Wprowadz wage (w kg) &nbsp;<input type=text name=cyfra2>
            <br>
            <input type=submit value=Sprawdz>
        </form>
        <?php
        $a = $_POST['cyfra1'];
        $b = $_POST['cyfra2'];
        if ($a == 0){
            echo 'Nie wprowadzaj 0';
        }else {
            $p = pow($a, 2);
            $bmi = $b / $p;
            ?><br><br><?php
            if ($bmi < 18.5){
                echo 'za malo!';
            }else if ($bmi > 25){
                echo 'za duzo!';
            }else {
                echo 'OK!';
            }
        }
        ?>
    </body>
</html>