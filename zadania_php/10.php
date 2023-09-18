<html>
    <body>
        <form method="POST">
            Wprowadz 1. bok &nbsp;<input type=text name=a>
            <br>
            Wprowadz 2. bok &nbsp;<input type=text name=b>
            <br>
            Wprowadz 3. bok &nbsp;<input type=text name=c>
            <br>
            <input type=submit value=Sprawdz>
        </form>
        <?php
        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];
        
        $arr = [$a, $b, $c];
        sort($arr);
        if ($arr[sizeof($arr)-2] + $arr[sizeof($arr)-3] <= $arr[sizeof($arr)-1]){
            echo 'nie da sie utworzyc trojkata';
        }else {
            echo 'mozna utworzyc trojkat';
        }
        ?> 
    </body>
</html>