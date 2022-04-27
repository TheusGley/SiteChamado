<!DOCTYPE html>
<head>


  <meta charset="UTF-8" />
  <title>Chamados CTI</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body>
  <div class="container" >
    <a class="links" id="parachamado"></a>
    <a class="links" id="parafinalizado"></a>
     
    <div class="content">      
      <!--FORMULÁRIO DE CHAMADOS-->
      <div id="chamado">
       <form method="post" action="insert.php"> 
          <h1>Chamados </h1> 
          <p> 
            <label>Nome Completo</label>
            <input id="nome" name="nome"  type="text" placeholder=""/>
          </p>
           
          <p> 
            <label for="email_login">E-mail</label>
            <input id="email_login" name="email"  type="text" placeholder="ex. defensoria@mt.gov.com.br" /> 
          </p>
          <p> 
            <label for="nucleo">Núcleo</label>
            <input id="nucleo" name="nucleo"  type="text" placeholder=" " /> 
          </p>
          <p> 
            <label for="setor">Setor/Gabinete</label>
            <input id="setor" name="setor" type="text" placeholder=" " /> 
          </p>
          <p> 
            <label for="telefone">Telefone para Contato</label>
            <input id="telefone" name="tel"  type="tel" placeholder=" ex: 65 123456789 " /> 
          </p>
          <p> 
            <label for="assunto">Descrição do problema</label>
            <input id="assunto" name="desc"  type="text" placeholder=""/>
          </p>
          <p> 
            <label for="info">Informações Adicionais</label>
            <input id="info" name="info"  type="text" placeholder="" /> 
          </p>
           
         
           
          <p> 
            <input type="submit" value="Enviar"  /> 
          </p>
          
        
          
          
        </form>
      </div>
     >    
 
    
          
    </div>
  </div>  
</body>
</html>
