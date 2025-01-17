<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pesquisar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <?php
   if (isset($_POST['busca'])) {
     $pesquisa = $_POST['busca'];
   } else {
    $pesquisa = '';
   }

   include "conexao2.php";

   $sql = "SELECT * FROM pessoas WHERE nome LIKE '%$pesquisa%'";

   $dados = mysqli_query($conn, $sql);

   ?>

  

<h1>Pesquisar</h1>

<nav class="navbar navbar-light bg-light">
  <form class="form-inline" action="pesquisa.php" method="POST">
    <input class="form-control mr-sm-2" type="search" placeholder="Nome" aria-label="Search" name="busca" autofocus>
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
  </form>
</nav>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">Telefone</th>
      <th scope="col">email</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">Funções</th>
    </tr>
  </thead>
  <tbody>

  <?php

while ($linha = mysqli_fetch_assoc($dados) ) {
  $cod_pessoa = $linha['cod_pessoa'];
   $nome = $linha['nome'];
   $endereco = $linha['endereco'];
   $endereco = $linha['endereco'];
   $telefone = $linha['telefone'];
   $email = $linha['email'];
   $data_nasc = $linha['data_nasc'];
   $data_nasc = mostra_data($data_nasc);


   echo "<tr>
           <th scope='row'>$nome</th>
           <td>$endereco</td>
           <td>$telefone</td>
          <td>$email</td>
          <td>$data_nasc</td>
          <td width=150px>
          <a href='cadastro_edit.php?id=$cod_pessoa' class='btn btn-success btn-sm'>Editar</a>
          <a href='#' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#confirma' onclick=" . '"' . "pegar_dados($cod_pessoa, '$nome')"  .'"' .'"' .">Excluir</a>
          </td>
        </tr>";
}

?>
   <!-- onclick= "pegar_dados(id, '$nome')" -->
    
  </tbody>
</table>



<a href="index.php" class="btn btn-info">Voltar para o Início</a>

<!-- Modal -->
<div class="modal fade" id="confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Excluir dados</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="excluir_script.php" method="POST">
        <p>Deseja realmente excluir  <b id="nome_pessoa">Nome da pessoa</b>?</p>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
        <input type="hidden" name="nome" id="nome_pessa_1" value="">
         <input type="hidden" name="id" id="cod_pessoa" value="">
        <input type="submit" class="btn btn-danger" value="Sim">
        </form>
      </div>
    </div>
  </div>
</div>


<script type="text/javascript">
  
function pegar_dados(id, nome) {
  document.getElementById('nome_pessoa').innerHTML = nome;
  document.getElementById('nome_pessa_1').value = nome;
   document.getElementById('cod_pessoa').value = id;
}

</script>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>