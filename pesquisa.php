<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="image/hmc.png" type="image/png" />
    <link href="css/bot.css" rel="stylesheet"> 
    <link href="css/sig.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css"/> 
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
    <link rel="javascript" type="jquery" href="http://code.jquery.com/jquery-1.8.3.min.js">
<body>



	<title>Consultas Agendadas</title>

<img width="150px" height="100px" align="right" src="image/hmc1.png"/>

   <h1><center>Consultas Agendadas</h1></center>
 





<?php  



$host ='localhost';
$user = 'root';
$senha = '';
$db ='projeto';

$conn = mysqli_connect($host,$user,$senha) or die (mysqli_error());
mysqli_select_db($conn,$db) or die(mysqli_error());
 ?>

<?php








$sql =mysqli_query($conn,"SELECT *,NOME_MEDICO FROM tbl_consulta AS C  INNER JOIN tbl_medico AS M  ON C.ID_MEDICO = M.ID_MEDICO" )or die(mysqli_error($conn));
echo "<table class='table table-bordered table-dark' id ='id_da_tabela'>";
echo "<tr>
      <th bgcolor ='#90EE90'>BE paciente</th>
      <th bgcolor ='#90EE90'>Nome</th>
      <th bgcolor ='#90EE90'>Data Consulta</th>
      <th bgcolor ='#90EE90'>Horário</th>
      <th bgcolor ='#90EE90'>Nome médico</th>
      <th bgcolor ='#90EE90'>Especialidade</th>
      <th bgcolor ='#90EE90'>Telefone</th>
      <th bgcolor ='#90EE90'>Descrição</th>
      
    </tr>
";


while ($aux = mysqli_fetch_array($sql)) {

  echo "<tr>";
  echo "<td>".$aux['be_paciente']."</td> ";    
  echo "<td>".$aux['nome_paciente']."</td>";
  echo "<td>".date("d/m/Y",strtotime(str_replace('/','-',$aux['dia_consulta'])))."</td>";
  echo "<td>".$aux['hora_consulta']."</td>";
  echo "<td>".$aux['NOME_MEDICO']."</td>";
  echo "<td>".$aux['ESPECIALIDADE']."</td>";
  echo "<td>".$aux['telefone']."</td>";
  echo "<td>".$aux['descricao']."</td></tr>";

  

    
 } 



















 
?>

<input type='button'  class="btn btn-outline-success" value='Voltar' onClick='history.go(-1)''>

<script type="text/javascript">
$(document).ready(function() {
    $('#id_da_tabela').DataTable();
} );
</script>

</body>
</head>
</html>


 
 