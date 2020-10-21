<?php
  #include 'classes/Connection.class.php';
  #include 'classes/DAO/EmployeeDAO.class.php';
  #include 'classes/entities/Employee.class.php';
  # $EmployeeDAO = new EmployeeDAO();
  # $employee = new Employee();

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>CRUD</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
<div class="card">
    <div class="card-body">
      <div class="page-header" align="center" >
        <h1>Painel Pessoa</h1>
        <div class="row">
          <div class="col-md-12">
            <div class="panel panel-primary">
              <div class="panel-body">
                  <div class="row">
                    <div class="col-md-12">
                      <a class="btn btn-primary" href="insert.php" role="button">Inserir</a>
                      <a class="btn btn-success" href="list.php"  role="button">Listar</a>
                      <a class="btn btn-warning" href="update.php" role="button">Alterar</a>
                      <a class="btn btn-danger" href="delete.php" role="button">Deletar</a>
                      <br>
                    </div>
                  </div>
                <br>
                </div>
              </div>
            </div>
         </div>

                   <br>
                  <div class="row">
                    <div class="col-md-12">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Código</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Categoria</th>
                          </tr>
                        </thead>
                        <?php foreach ($usuarioDAO->buscar() as $row) { ?>
                          <tbody>
                            <tr>
                              <td><?= $row["idUsuario"] ?></td>
                              <td><?= $row["nomeUsuario"] ?></td>
                              <td><?= $row["senhaUsuario"] ?></td>
                            </tr>
                          </tbody>
                          <?php  } ?>
                        </table>
                      </div>
                    </div>
      </div>
    </div>
</div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>