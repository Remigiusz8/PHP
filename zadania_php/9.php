<html>
    <body>
        <form method="POST">
            Wprowadz haslo: &nbsp;<input type=text name=haslo>
            <br>
            <input type=submit value=Sprawdz>
        </form>
        <?php
        $a = $_POST['haslo'];
        $li = preg_match('~[0-9]+~', $a);
        $l = preg_match('/[a-z]/', $a);
        $L = preg_match('/[A-Z]/', $a);
        $dl = strlen($a);
        $zn = preg_match("/[\[^\'£$%^&*()}{@:\'#?~><>,;@\|\-=\-_+\-¬\`\]]/", $a);

        if ($dl <= 4 || $li != 1 || $l != 1 || $L != 1 || $zn != 1){
            echo 'Slabe';
        }else if ($dl < 8){
            echo 'Srednie';
        }else {
            echo 'mocne';
        }
        ?> 
    </body>
</html>