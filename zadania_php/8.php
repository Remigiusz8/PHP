<html>
    <body>
        <form method="POST">
            Wprowadz rok &nbsp;<input type=text name=y>
            <br>
            <input type=submit value=sprawdz>
        </form>
        <?php
        $a = $_POST['y'];
        if ($a % 4 == 0){
            echo 'rok przestepny';
        }else {
            echo 'rok nieprzestepny';
        }
        ?> 
    </body>
</html>