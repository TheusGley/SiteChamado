<?php


$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = md5($_POST['senha']);
$connect = mysqli_connect('127.0.0.1','root','', 'db_site');
$result =  "SELECT login, senha FROM usuarios WHERE login ='$login' AND senha = '$senha'";
  if (isset($entrar)) {

    $verifica = mysqli_query($connect,$result) or die("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='login.html';</script>";
        die();
      }else{
        setcookie("login",$login);
        header("Location:listachamado.php");
      }
  }
?>