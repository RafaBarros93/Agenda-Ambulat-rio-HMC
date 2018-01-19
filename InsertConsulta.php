<!DOCTYPE html>
<html>
<meta charset="utf-8">
    <link rel="icon" href="image/hmc.png" type="image/png" />
    <link href="css/bot.css" rel="stylesheet">
    <link href="css/sig.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
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

$bepaciente = $_POST['be_paciente'];
$nome = $_POST['nome'];
$data = $_POST['dia_consulta'];
$nomemed = $_POST['nomemedico'];
$desc = $_POST['desc'];
$telefone = $_POST['telefone'];
$horaconsulta = $_POST['hora_consulta'];


//$data =  date("d/m/Y",strtotime(str_replace('/','-',$data)));




$sql =mysqli_query($conn,"INSERT INTO `tbl_consulta` (nome_paciente,dia_consulta,descricao,telefone,hora_consulta,be_paciente,ID_MEDICO) VALUES ('$nome','$data','$desc','$telefone',
    '$horaconsulta','$bepaciente','$nomemed')"); 
 

    echo "<center><h1>Cadastro Efetuado com Sucesso!</h1></center>";
    echo "<center><input type='button' class='btn btn-danger' value='Voltar' onClick='history.go(-2)''></center>";
    
     




        



?>
 
  </head>
 </body>
</html> 