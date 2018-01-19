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
    <title>Resultado Pesquisa</title>
    <img width="150px" height="100px" align="top" src="image/hmc1.png"/>
    <h1 ><center>Consultas Agendadas</center></h1>



<?php 
$host ='localhost';
$user = 'root';
$senha = '';
$db ='projeto';

$conn = mysqli_connect($host,$user,$senha) or die (mysqli_error());
mysqli_select_db($conn,$db) or die(mysqli_error());
 






$pesquisarP = $_POST['pesquisarP'];
$pesquisarBE = $_POST['pesquisarBE'];
$pesquisarM = $_POST['pesquisarM'];




if ($pesquisarP != "" ) {
$resP =mysqli_query($conn,"SELECT *,NOME_MEDICO FROM tbl_consulta AS C  INNER JOIN tbl_medico AS M  ON C.ID_MEDICO = M.ID_MEDICO where `nome_paciente` LIKE '%$pesquisarP%'")
or die(mysqli_error($conn));

echo "<table class='table table-bordered table-dark'>";
echo "<thead>";
echo "<tr>
     
      <th bgcolor ='#90EE90'>Nome</th>
     <th bgcolor ='#90EE90'>BE paciente</th>
      <th bgcolor ='#90EE90'>Data Consulta</th>
      <th bgcolor ='#90EE90'>Horário</th>
      <th bgcolor ='#90EE90'>Telefone</th>
      <th bgcolor ='#90EE90'>Nome médico</th>
      <th bgcolor ='#90EE90'>Especialidade</th>
      <th bgcolor ='#90EE90'>Descrição</th>
    </tr>
    </thead>
  <tbody>";


while ($aux = mysqli_fetch_array($resP)) {

  echo "<tr>";
  echo "<td bgcolor ='#FF0000'>".$aux['nome_paciente']."</td>";
  echo "<td>".$aux['be_paciente']."</td>";
  echo "<td>".date("d/m/Y",strtotime(str_replace('/','-',$aux['dia_consulta'])))."</td>";
  echo "<td>".$aux['hora_consulta']."</td>";
  echo "<td>".$aux['telefone']."</td>";
  echo "<td>".$aux['NOME_MEDICO']."</td>";
  echo "<td>".$aux['ESPECIALIDADE']."</td>";
  echo "<td>".$aux['descricao']."</td></tr>

      <tr>";


}


}
/*else{
  echo "<h2>Nenhum parâmetro inserido para pesquisa!</h2>";
  echo "<br><input type='button'  value='Voltar' onClick='history.go(-1)''></br>";
}*/

 

if ($pesquisarM != "") {
  $resM =mysqli_query($conn,"SELECT *,NOME_MEDICO FROM tbl_consulta AS C  INNER JOIN tbl_medico AS M  ON C.ID_MEDICO = M.ID_MEDICO where `nome_medico` LIKE '%$pesquisarM%'")
or die(mysqli_error($conn));

echo "<table class='table table-bordered table-dark'>";
echo "<thead>";
echo "<tr>
      <th bgcolor ='#90EE90'>Nome médico</th>
      <th bgcolor ='#90EE90'>BE paciente</th>
      <th bgcolor ='#90EE90'>Nome</th>
      <th bgcolor ='#90EE90'>Data Consulta</th>
      <th bgcolor ='#90EE90'>Horário</th>
      <th bgcolor ='#90EE90'>Telefone</th>
      <th bgcolor ='#90EE90'>Especialidade</th>
      <th bgcolor ='#90EE90'>Descrição</th>
    </tr>
    </thead>
  <tbody>";





while ($aux = mysqli_fetch_array($resM)) {


  echo "<tr>";
  echo "<td bgcolor ='#FF0000'>".$aux['NOME_MEDICO']."</td>";
  echo "<td>".$aux['be_paciente']."</td>";
  echo "<td>".$aux['nome_paciente']."</td>";
  echo "<td>".date("d/m/Y",strtotime(str_replace('/','-',$aux['dia_consulta'])))."</td>";
  echo "<td>".$aux['hora_consulta']."</td>";
  echo "<td>".$aux['telefone']."</td>";
  echo "<td>".$aux['ESPECIALIDADE']."</td>";
  echo "<td>".$aux['descricao']."</td></tr>
    <tr>";



  }
}



/*else{
  echo "<h2>Nenhum parâmetro inserido para pesquisa!</h2>";
  echo "<br><input type='button'  value='Voltar' onClick='history.go(-1)''></br>";
}*/

if ($pesquisarBE != "") {
  $resBE =mysqli_query($conn,"SELECT *,NOME_MEDICO FROM tbl_consulta AS C  INNER JOIN tbl_medico AS M  ON C.ID_MEDICO = M.ID_MEDICO where `be_paciente` LIKE '%$pesquisarBE%'")
or die(mysqli_error($conn));

echo "<table class='table table-bordered table-dark'>";
echo "<thead>";
echo "<tr>
      <th bgcolor ='#90EE90'>BE paciente</th>
      <th bgcolor ='#90EE90'>Nome</th>
      <th bgcolor ='#90EE90'>Nome médico</th>
      <th bgcolor ='#90EE90'>Data Consulta</th>
      <th bgcolor ='#90EE90'>Horário</th>
      <th bgcolor ='#90EE90'>Telefone</th>
      <th bgcolor ='#90EE90'>Especialidade</th>
      <th bgcolor ='#90EE90'>Descrição</th>
    </tr>
    </thead>
  <tbody>";





while ($aux = mysqli_fetch_array($resBE)) {


  echo "<tr>";
  echo "<td bgcolor ='#FF0000'>".$aux['be_paciente']."</td>";
  echo "<td>".$aux['nome_paciente']."</td>";
  echo "<td>".date("d/m/Y",strtotime(str_replace('/','-',$aux['dia_consulta'])))."</td>";
  echo "<td>".$aux['hora_consulta']."</td>";
  echo "<td>".$aux['telefone']."</td>";
  echo "<td>".$aux['NOME_MEDICO']."</td>";
  echo "<td>".$aux['ESPECIALIDADE']."</td>";
  echo "<td>".$aux['descricao']."</td></tr>
    <tr>";


}

}/*else{
  echo "<h2>Nenhum parâmetro inserido para pesquisa!</h2>";
  echo "<br><input type='button'  value='Voltar' onClick='history.go(-1)''></br>";
}*/





?>

<input type='button' class="btn btn-outline-success" value='Voltar' onClick='history.go(-1)''>

</head>

</html> 