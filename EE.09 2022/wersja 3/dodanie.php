<?php
$a = $_POST['numer'];
$b = $_POST['jeden'];
$c = $_POST['dwa'];
$d = $_POST['trzy'];

$con = mysqli_connect('localhost', 'root', '', 'ee09');

$zap1 = "insert into ratownicy values (null, '$a', '$b', '$c', '$d')";

$q = mysqli_query($con, $zap1);

include 'ratownicy.html';
mysqli_close($con);
?>