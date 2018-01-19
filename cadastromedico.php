
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
  <title>Cadastro Médico</title>

<body>




<form  name="cadastromedico" method="POST" action="InsertMedico.php">
  <legend>Cadastro médicos Ambulátorio HMC</legend>
   <hr>
  <div class="container">
    <div class="form-group col-md-4">
      <label for="nomemedico" class="col-form-label">Nome:</label>
      <input type="text" class="form-control" name="nomemedico" placeholder="Nome:">
       <label for="especialidade" class="col-form-label">Especialiade:</label>
<input type="text" class="form-control" name="especialidade" placeholder="Especialiade">      
      
     
   <div class="form-signin">
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