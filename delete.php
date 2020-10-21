<?php
	#include 'classes/Connection.class.php';
	#include 'classes/DAO/EmployeeDAO.class.php';
	#include 'classes/entities/Employee.class.php';
	#	$EmployeeDAO = new EmployeeDAO();
	#	$employee = new Employee();
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
<div class="container">  

				<div class="py-3 text-center">
					<h2>Excluir Pessoa</h2>
					<p class="lead">Digite o código referente ao funcionário que deseja excluir!</p>
				</div>

	      		<div class="row">
	      			<div class="col-md-12">
						<div class="card-body font-weight-bold">
							<form action="processa_envio.php" method="post">
								<div class="form-group">
									<label for="cod">Código</label>
									<input type="text" class="form-control" name="cod" id="cod" placeholder="001">
								</div>
								<button type="submit" class="btn btn btn-danger">Deletar</button>
								<a class="btn btn-success" href="list.php" role="button">Início</a>
							</form>
							</form>
						</div>
					</div>
	      		</div>
      		</div>


 	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>