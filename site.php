<?php
session_start();
if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['login']);
  unset($_SESSION['senha']);
  header('location:login.php');
  }

$logado = $_SESSION['login'];
?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="image/hmc.png" type="image/png" />



    
<head>
	<title>Agenda Ambulátorio</title>

<div>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Agenda Ambulátorio HMC <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="cadastroconsulta.php">Cadastrar Consulta</a>
       <a class="nav-item nav-link" href="cadastromedico.php">Cadastrar Médico</a>
       <a class="nav-item nav-link" href="pesquisa.php">Consultas Cadastradas</a>
       <a class="nav-item nav-link" href="Bootstrap-calendar\public_html\demos\calendario.html">Calendário</a> 
      <a class="nav-item nav-link" href="index.php">Sair</a>
  
      
    </div>
  </div>
</nav>
</div>

</head>
<body>
   <img width="150px" height="100px" align="right" src="image/hmc1.png"/>
  <div class="alert alert-success">

<form  method="POST" action="resultadopesquisa.php">
  <div class="form-group col-md-4">
  <label for="busca">Nome Paciente:</label>
   <div class="col-sm-10">
  <input type="text" class="form-control-label" name="pesquisarP" autofocus   >
  
  <button type="submit" name="btn_paciente" class="btn btn-outline-success">Pesquisar</button>
    </div>
</div>
<div class="form-group col-md-4">
  <label for="pesquisar1">BE do Paciente:</label>
  <div class="col-sm-10">
  <input type="text" class="form-control-label" name="pesquisarBE" >
  <button type="submit"  class="btn btn-outline-success">Pesquisar</button>
    </div>
</div>

 <div class="form-group col-md-4">
  <label for="pesquisar1">Nome Médico:</label>
  <div class="col-sm-10">
  <input type="text" class="form-control-label " name="pesquisarM" >
  <button type="submit"  class="btn btn-outline-success">Pesquisar</button>
    </div>
  </div>
 </div>     
  </form>
 


<script src="js/viewport-bug-workaround.js"></script>
</body>
</html>
