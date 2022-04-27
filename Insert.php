<?php
   /**
    $nome   = $_GET=["nome"][0];
    $nucleo = $_GET=["nucleo"][0];
    $setor  = $_GET=["setor"][0];
    $tel    = $_GET=["tel"][0];
    $desc   = $_GET=["desc"][0];
    $email  = $_GET=["email"][0];

**/

    $mysql = new mysqli('127.0.0.1', 'root', 'root', 'bd_site');

    if ($mysql) {
        echo("Conectado");
    }else{
        echo("Desconectado");
    }

 /**   $query = insert into chamados (nome, nucleo, setor, tel, desc, email) values ('$nome', '$nucleo', '$setor', '$tel', '$desc', '$email');


    
    mysqli_query($mysql, $query);
    mysqli_close($conexao);



  <p class="alert-success">
    Chamado:  $nome; ,  nucleo: $nucleo; setor: $setor; tel: $tel; desc: $desc; email: $email;    - adicionado com sucesso!
  </p>
 **/
 ?>
