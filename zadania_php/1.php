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
        $wynik = $a + $b;
        echo $wynik;
        ?> 
    </body>
</html>