

 

     <?php
    $nome   = $_GET=["nome"];
    $nucleo = $_GET=["nucleo"];
    $setor  = $_GET=["setor"];
    $tel    = $_GET=["tel"];
    $desc   = $_GET=["desc"];
<html> 
  <head> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" type="text/css" href="style.css" />
  </head>
  <body>
  <div id="finalizado">    
              
              <h1 id="enviado"> Chamado enviado!!! </h1>
              <p> 
                  <label id="label1">Seu chamado foi enviado com sucesso, Estaremos atendendo com prioridade!!! </label>
              </p>
              <p id="link">  
                
                <a href="#parachamado"> Voltar para chamados</a>
              </p>
      
              
        
    
          
</div>
  </body>
</html>
<?php
    $nome   = $_POST = ["nome"][0];
    $nucleo = $_POST=["nucleo"];
    $setor  = $_POST=["setor"];
    $tel    = $_POST=["tel"];
    $desc   = $_POST=["desc"];
    $email  = $_POST=["email"];
    $info   = $_POST=["info"];

    


   // $query = " insert into chamado (nome) values '{$nome}')";
   // if ($query){
   //   echo " ";
   // }
  
    
  
  
  echo   " Chamado: " .$nome. " adicionado com sucesso!";

    $email  = $_GET=["email"];
    $info   = $_GET=["info"];


   // $query = " insert into chamado (nome, nucleo, setor, tel, desc, email) values ('{$nome}', '{$nucleo}','{$setor}', {$tel},'{$desc}','{$email}','{$info}')";
    
    //$mysql = new mysqli('127.0.0.1', 'root', '', 'bd_chamado');
    
   // mysqli_query($mysql, $query);
    //mysqli_close($conexao);

  $nome;

  //<p class="alert-success">
  //      Chamado:=  $nome; ,  nucleo: = $nucleo;  - adicionado com sucesso!
//</p>

    ?>
