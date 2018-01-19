<?php 
$host ='localhost';
$user = 'root';
$senha = '';
$db ='projeto';

$conn = mysqli_connect($host,$user,$senha) or die (mysqli_error());
mysqli_select_db($conn,$db) or die(mysqli_error());
 ?>