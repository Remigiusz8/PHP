<html>
    <body>
        <form method="POST">
            Wprowadz 1. cyfre &nbsp;<input type=text name=cyfra1>
            <br>
            Wprowadz 2. cyfre &nbsp;<input type=text name=cyfra2>
            <br>
            Wprowadz 3. cyfre &nbsp;<input type=text name=cyfra3>
            <input type=submit value=Sprawdz>
        </form>
        <?php
        $a = $_POST['cyfra1'];
        $b = $_POST['cyfra2'];
        $c = $_POST['cyfra3'];
        $wynik = max($a, $b, $c);
        echo 'Cyfra ' . $wynik . ' jest najwieksza';
        ?> 
    </body>
</html>