<?php
$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = md5($_POST['senha']);
$connect = mysql_connect('db_chamados','root','root');
$db = mysql_select_db('db_chamados');
  if (isset($entrar)) {

    $verifica = mysql_query("SELECT * FROM usuarios WHERE login =
    '$login' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysql_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die();
      }else{
        setcookie("login",$login);
        header("Location:index.php");
      }
  }
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css" />
	<title>Login CTI</title>
</head>
<body>
<div class="container" >
  <div id="login" align="center">
	<form method="POST" action="conexaodb.php">
		<label>Usuario</label><br>
		<input type="viewport" id="nome" name="nome">
		<br>
		<label>Senha</label><br>
		<input type="password" id="senha" name="senha">
		<br>
    <br>
		<input id="botao" type="submit" name="" value="Login">
		
	</form>

	<div>
		<a href="index.php">  
      <input id="botao" type="submit" name="" value="Voltar">
    </a>
	</div>
 

</div>
</div>
