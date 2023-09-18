<html>
    <body>
        <form method="POST">
            Wprowadz rok urodzenia pierwszej osoby &nbsp;<input type=date name=cyfra1>
            <br>
            Wprowadz rok urodzenia drugiej osoby &nbsp;<input type=date name=cyfra2>
            <br>
            <input type=submit value=sprawdz>
        </form>
        <?php
        $a = $_POST['cyfra1'];
        $b = $_POST['cyfra2'];
        if ($a > $b){
            echo 'Pierwsza osoba jest starsza';
        }else if ($a == $b){
            echo 'Nikt nie jest starszy, sa rowni';
        }else{
            echo 'Druga osoba jest starsza';
        }
        ?> 
    </body>
</html>