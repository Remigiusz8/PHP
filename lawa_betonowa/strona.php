<html>
    <body>
    <?php
    $obwod = $_POST;
    $szerokosc = $_POST['szerokosc'];
    $glebokosc = $_POST['glebokosc'];
    $a = $_POST['bok_a'];
    $b = $_POST['bok_b'];

    $obwod = 2 * $a + 2 * $b;?>
    Obwod wynosi: <?php
    echo $obwod; ?>
    <br><?php
    $objetosc = $obwod * $szerokosc * $glebokosc;?>
    Objetosc wynosi: <?php
    echo $objetosc; ?>
    <br>
    </body>
</html>