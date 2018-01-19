<?php  
$host ='localhost';
$user = 'root';
$senha = '';
$db ='projeto';

header("Content-Type: application/json; charset=utf-8");

$conn = mysqli_connect($host,$user,$senha) or die (mysqli_error());
mysqli_select_db($conn,$db) or die(mysqli_error());

$sql =mysqli_query($conn,"SELECT * FROM tbl_consulta ORDER BY nome_paciente ASC")or die(mysqli_error($conn));

$data = array();
$keys = array('title', 'start', 'end');
while ($aux = mysqli_fetch_array($sql)) {

    $values = array($aux['nome_paciente'], $aux['dia_consulta'].'T'.$aux['hora_consulta'], $aux['dia_consulta'].'T'.$aux['hora_consulta']);

    array_push($data, array_combine($keys, $values));
}

echo json_encode($data);
?>


 
 