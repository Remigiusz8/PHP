<html>
    <body>
        <form method="POST">
            Wprowadz 1. cyfre &nbsp;<input type=text name=cyfra1>
            <br>
            Wprowadz 2. cyfre &nbsp;<input type=text name=cyfra2>
            <br>
            Wybierz dzialanie:<br>
            <input type=radio name=liczenie value=wybor> Dodawanie<br>
            <input type=radio name=liczenie value=wybor2> Odejmowanie<br>
            <input type=radio name=liczenie value=wybor3> Mnożenie<br>
            <input type=radio name=liczenie value=wybor4> Dzielenie<br>
            <input type=submit value=Oblicz>
        </form>
        <?php
        $liczenie = $_POST['liczenie'];
        $a = $_POST['cyfra1'];
        $b = $_POST['cyfra2'];

        switch($liczenie){
            case "wybor": $liczenie = $a + $b;
            echo 'Wynik: ' . $liczenie;
            break;
            case "wybor2": $liczenie = $a - $b;
            echo 'Wynik: ' . $liczenie;
            break;
            case "wybor3": $liczenie = $a * $b;
            echo 'Wynik: ' . $liczenie;
            break;
            case "wybor4": if ($b == 0){
                echo 'Nie mozna dzielic przez 0!';
            } else {
                $liczenie = $a / $b;
                echo 'Wynik: ' . $licznie;
            }
            break;
            default: echo 'Cos poszlo nie tak, sprobuj ponownie';
        }
        ?> 
    </body>
</html>