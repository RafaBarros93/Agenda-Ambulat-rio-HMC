<?php
session_start();

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
<head>
	<img width="150px" height="100px" align="top" src="image/hmc1.png"/>
  <title>Cadastro Paciente</title>

<body>




<form name="cadasropaciente" method="POST" action="cadastro.php">
  <legend>Cadastro paciente</legend>
  <div class="container">
    <div class="form-group col-md-6">
    <label for="nome" class="col-form-label">Nome:</label>
    <input type="text" class="form-control" name="nome" placeholder="Nome:">
<label for="dia_consulta" class="col-form-label">Dia da Consulta:</label>     
    <input type="text" class="form-control" name="dia_consulta" placeholder="dd/mm/aaaa:" required  >
<label for="endereco" class="col-form-label">Endereço:</label>
<br><input type="text" class="form-control" name="endereco" placeholder="Endereço:"> 
<label for="tel" class="col-form-label">Telefone:</label>
<br><input type="text" class="form-control" name="tel" placeholder="Telefone:"> 
<label for="cpf" class="col-form-label">CPF:</label>
<br><input type="number" class="form-control" name="cpf" placeholder="000.000.000-00"> 
  
    
      
      
     
   <div class="form-signin">
  <button type="submit" class="btn btn-primary">Cadastrar</button>
      <button type="reset" class="btn btn-primary">Limpar</button> 
    </div>

    </div>
  </div>
<script src="js/viewport-bug-workaround.js"></script>
</form>
</head>
</body>
</html>