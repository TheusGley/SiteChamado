<!DOCTYPE html>
<html lang="pt-br">
<?php include_once "conexaodb.php" ?>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">

</head>

<body style="background-image: url(fundo.png);  background-position 90px;
      background-size: 90%;
      background-repeat: inherit;
  ">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center pt-3 pb-2">
            <h2 class="display-5 mb-4">Lista de Chamados</h2>

            <button type="button" id="botao" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#cadUsuarioModal">Cadastrar Usuário</button>
        </div>

        <span id="msgAlerta"></span>
        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table  class="table table-striped table-hover display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Email</th>
                                <th>Setor</th>
                                <th>Setor</th>
                                <th>Telefone</th>
                                <th>Descrição</th>
                            </tr>
                            
                        </thead>
                            <tbody>

                            </tbody>
                    </table>
                </div>

            
                        
                     
            </div>

        </div>      
                <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
                <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
                <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>

                <script src="js/custom.js"></script>
            </body>

            </html>