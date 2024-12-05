<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <h1>Editar cadastro</h1>

    <?php 

      include "conexao2.php"; 
     $id = isset($_GET['id']) ? $_GET['id'] : '';
       
       


      $sql = "SELECT * FROM pessoas WHERE cod_pessoa = $id";

      $dados = mysqli_query($conn, $sql);
      $linha = mysqli_fetch_assoc($dados);
    ?>

    <form action="edit_script.php" method="POST">
  <div class="mb-1">
    <label for="Name" class="form-label">Nome Completo</label>
    <input type="text" class="form-control" name="nome" required value="<?php echo $linha['nome']; ?>">
  </div>
  <div class="mb-2">
    <label for="email" class="form-label">email</label>
    <input type="email" class="form-control" name="email" required  value="<?php echo $linha['email']; ?>">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Endereço</label>
    <input type="text" class="form-control" name="endereco" required  value="<?php echo $linha['endereco']; ?>">
  </div>
  <div class="mb-4">
    <label for="exampleInputEmail1" class="form-label">Telefone</label>
    <input type="number" class="form-control" name="telefone" required  value="<?php echo $linha['telefone']; ?>">
  </div>
  <div class="mb-5">
    <label for="exampleInputPassword1" class="form-label">Data de Nascimento</label>
    <input type="date" class="form-control" name="data_nascimento" required  value="<?php echo $linha['data_nasc']; ?>">
  </div>
  <button type="submit" class="btn btn-success" value="Salvar Alterações">Alterar dados</button>
  <input type="hidden" name="id" value="<?php echo $linha['cod_pessoa'] ?>">
</form>

<a href="index.php" class="btn btn-info">Voltar para o Início</a>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>