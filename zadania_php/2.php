<html>
    <body>
        <form method="POST">
            Wprowadz 1. cyfre &nbsp;<input type=text name=cyfra1>
            <br>
            Wprowadz 2. cyfre &nbsp;<input type=text name=cyfra2>
            <br>
            <input type=submit value=Oblicz>
        </form>
        <?php
        $a = $_POST['cyfra1'];
        $b = $_POST['cyfra2'];
        $wynik = $a - $b;
        $wynik1 = $a * $b;
        if ($b == 0){
            echo 'Dzielenie ' . 'Nie mozna dzielic przez 0'; ?><br><?php
        } else {
            echo 'Dzielenie ' . $a / $b; ?><br><?php
        }
        echo 'Mnozenie ' . $wynik1;  ?><br><?php
        echo 'Odejmowanie ' . $wynik; ?><br><?php
        
        ?> 
    </body>
</html>