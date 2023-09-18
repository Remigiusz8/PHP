<html>
    <body>
        <form method="POST">
            Wprowadz wzrost (w cm) &nbsp;<input type=text name=cyfra1>
            <br>
            <input type=submit value=Sprawdz>
        </form>
        <?php
        $a = $_POST['cyfra1'];
        if ($a < 150){
            echo 'niski';
        }else if ($a > 180){
            echo 'wysoki';
        }else {
            echo 'sredni';
        }
        ?> 
    </body>
</html>