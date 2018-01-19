<?php 
session_start();  
?>
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

 


    <title>Agenda Ambulátorio</title>

  
    
  </head>

  <body>
     <?php
      if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
      }
    ?>

    <div class="container">


<form class="form-signin"  method="post" action="ope.php" id="formlogin" name="formlogin" >
<img width="150px" height="100px" align="center" src="image/hmc1.png"/>
<h2 class="form-signin-heading">Acesso Restrito Ambulátorio HMC</h2>
        <label for="usuario" class="sr-only">Usuário</label>
        <input type="text" name="login" id="login"  class="form-control" placeholder="Digite o usuário:" required autofocus>
        <label for="senha" class="sr-only">Senha</label>
        <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha:" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Lembre me
          </label>
        </div>
       
 <button name="btnlogar"  class="btn btn-danger btn-block" type="submit">Acessar</button> 

</form>


</div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/viewport-bug-workaround.js"></script>
  </body>
</html>
