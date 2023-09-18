<?php
$connection = mysqli_connect('localhost', 'root', '', 'wedkowanie1');
$name = $_POST['imie'];
$surname = $_POST['nazwisko'];
$address = $_POST['adres'];

$q = "insert into Karty_wedkarskie values 
(null, '$name', '$surname', '$address', null, null)";

$query = mysqli_query($connection, $q);

include 'karta.html';
mysqli_close($connection);
?>