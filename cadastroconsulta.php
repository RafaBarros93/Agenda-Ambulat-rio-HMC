<?php

include_once "conexao.php";

$sql = "SELECT ID_MEDICO,NOME_MEDICO,ESPECIALIDADE FROM tbl_medico";

?>
<!DOCTYPE html>
<html>
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
  
	<title>Cadastro Consulta</title>

<body>



<img width="150px" height="100px" align="top" src="image/hmc1.png"/>
<form  name="cadastroconsulta" method="POST" action="InsertConsulta.php">
 
<div class="jumbotron jumbotron-fluid">
  <legend>Cadastro Consulta Ambulátorio HMC</legend>
  </div>
  <hr>
  <div class="container">
    <div class="form-group col-md-4">
    <label for="be_paciente">BE paciente:</label>
    <input type="text" class="form-control" name="be_paciente" pattern="[0-9\s]+" placeholder="BE paciente:"  autofocus>
    <label for="nome" >Nome paciente:</label>
    <input type="text" class="form-control" name="nome" pattern="[a-zA-Z\s]+"  placeholder="Nome:"  required >
    <label for="dia_consulta" class="col-form-label">Dia da Consulta:</label>     
    <input type="date" class="form-control" name="dia_consulta" placeholder="dd/mm/aaaa" data-mask="00/00/0000" required >
    <label for="hora_consulta" class="col-form-label">Horário:</label>     
    <input type="time" class="form-control" name="hora_consulta" pattern="[0-9\s]+" placeholder="hh:mm"  required autofocus="">   
    <label for="tel" class="col-form-label">Telefone Paciente:</label> 
    <input type="text" class="form-control cel-sp-mask" name="telefone" placeholder="(00) 00000-0000" required>
    <label for="nomemedico" class="col-form-label">Nome do Médico:</label>
    <select class="form-control" name="nomemedico">
 <option>Selecione...</option>
    <?php 
      $prod = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_assoc($prod)) { ?>
 <option value="<?php echo $row['ID_MEDICO'] ?>"><?php echo $row['NOME_MEDICO'] ?></option>
      <?php } ?>
 
 </select>
   
  

   <label for="desc" class="col-form-label">Descrição:</label>
    <input type="text" class="form-control" type="text"  name="desc" pattern="[a-zA-Z\s]+" placeholder="Consulta ou retorno:" required></input>
      
      
   <br>  
  <div class="container"> 
  <button type="submit" class="btn btn-success" >Cadastrar</button>
  <button type="reset" class="btn btn-danger">Limpar</button> 
  <input type='button'  class="btn btn-danger" value='Voltar' onClick='history.go(-1)''>
 
  </div>

    </div>
  </div>
<script src="js/viewport-bug-workaround.js"></script>


</form>
  <hr>
</head>
</body>
</html>