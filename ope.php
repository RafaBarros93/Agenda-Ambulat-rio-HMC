<?php 
// session_start inicia a sessão
session_start();
// as variáveis login e senha recebem os dados digitados na página anterior
$login = $_POST['login'];
$senha = $_POST['senha'];
// as próximas 3 linhas são responsáveis em se conectar com o bando de dados.


;


$conn= mysql_connect('localhost','root','') or die ("Sem conexão com o servidor");
$db= mysql_select_db('projeto');
$result = mysql_query("SELECT * FROM `tbl_conta` WHERE `login` = '$login' AND `senha`= '$senha'");
/* Logo abaixo temos um bloco com if e else, verificando se a variável $result foi bem sucedida, ou seja se ela estiver encontrado algum registro idêntico o seu valor será igual a 1, se não, se não tiver registros seu valor será 0. Dependendo do resultado ele redirecionará para a pagina site.php ou retornara  para a pagina do formulário inicial para que se possa tentar novamente realizar o login */
if(mysql_num_rows ($result) > 0 )
{
$_SESSION['login'] = $login;
$_SESSION['senha'] = $senha;
header('location:site.php');
}
else{
	unset ($_SESSION['login']);
	unset ($_SESSION['senha']);
	header('location:index.php');
	$_SESSION['msg'] = "<center><font color='#FF0000'><h4>Login e senha incorreto!</h4></center></font>";
	}
 
?>