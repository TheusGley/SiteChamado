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
       <form method="post" action=""> 
          <h1>Chamados </h1> 
          <p> 
            <label for="nome_completo">Nome Completo</label>
            <input id="nome_completo" name="nome_completo" required="required" type="text" placeholder=""/>
          </p>
           
          <p> 
            <label for="email_login">E-mail</label>
            <input id="email_login" name="email_login" required="required" type="text" placeholder="ex. defensoria@mt.gov.com.br" /> 
          </p>

          <p> 
            <label for="nucleo">Núcleo</label>
            <input id="nucleo" name="nucleo" required="required" type="text" placeholder=" " /> 
          </p>

          <p> 
            <label for="setor">Setor/Gabinete</label>
            <input id="stor" name="setor" required="required" type="text" placeholder=" " /> 
          </p>

          <p> 
            <label for="telefone">Telefone para Contato</label>
            <input id="telefone" name="telefone" required="required" type="tel" placeholder=" ex: 65 123456789 " /> 
          </p>

          <p> 
            <label for="assunto">Descrição do problema</label>
            <input id="assunto" name="assunto" required="required" type="text" placeholder=""/>
          </p>

          <p> 
            <label for="Info">Informações Adicionais</label>
            <input id="Info" name="info " required="required" type="textarea" placeholder=" " /> 
          </p>
           
         
           
          <p> 
            <input type="submit" value="Enviar" formaction="#paracadastro" /> 
          </p>
          
        
          
          
        </form>
      </div>
      <div id="finalizado">
         
        
      
          <h1 id="enviado"> Chamado enviado!!! </h1>
          <p> 
              <label id="label1">Seu chamado foi enviado com sucesso, Estaremos atendendo com prioridade!!! </label>
          </p>
          <p id="link">  
            
            <a href="/site.chamados/chamado.php "> Voltar para chamados</a>
          </p>
  
         
        
 
        </div>    
 
    


      </div>    
    </div>
  </div>  
</body>
</html>