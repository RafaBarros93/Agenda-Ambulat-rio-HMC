
 <!DOCTYPE html>
<html>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="image/hmc.png" type="image/png" />
    <link href="css/bot.css" rel="stylesheet">
    <link href="css/sig.css" rel="stylesheet">

<head>
	<title>Cadastro Consulta Ambulátorio HMC</title>

<body>


<?php 
$host ='localhost';
$user = 'root';
$senha = '';
$db ='projeto';

$conn = mysqli_connect($host,$user,$senha) or die (mysqli_error());
mysqli_select_db($conn,$db) or die(mysqli_error());
 ?>

<?php


$nomemedico = $_POST['nomemedico'];
$especialidade = $_POST ['especialidade'];



$sql =mysqli_query($conn,"INSERT INTO `tbl_medico` (NOME_MEDICO,ESPECIALIDADE) VALUES ('$nomemedico','$especialidade')"); 

    echo "<center><h1>Cadastro Efetuado com Sucesso</h1></center>";
    echo "<center><input type='button' class='btn btn-danger' value='Voltar' onClick='history.go(-2)''></center>";
    mysqli_close($conn);
        



?>
 
  </head>
 </body>
</html> 



 
