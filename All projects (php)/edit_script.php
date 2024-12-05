<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alterar Cadastro</title>
  </head>
  <body>
    <div class="container">
        <div class="row">
         <?php

        include "conexao2.php";

        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $email = $_POST['email'];
        $data_nascimento = $_POST['data_nascimento'];


        $sql = "INSERT INTO `pessoas`( `nome`, `endereco`, `telefone`, `email`, `data_nasc`) 
        VALUES ('$nome','$endereco','$telefone','$email','$data_nascimento')";

        
$sql = "UPDATE `pessoas` set `nome` = '$nome', `endereco` = '$endereco', `telefone` = '$telefone', `email` = '$email', `data_nasc` = '$data_nascimento' WHERE cod_pessoa = $id";

        if (mysqli_query($conn, $sql)) {
           mensagem("$nome alterado com sucesso!",'success');
        } else 
           mensagem("$nome NÃO alterado!",'danger');
         ?>

         <a href="index.php" class="btn btn-primary">Voltar</a>
        </div>
    </div>
    