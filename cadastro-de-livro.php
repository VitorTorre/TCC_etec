<?php
session_start();
if(isset($_POST['submit'])) {
    //print_r('Nome do livro' .$_POST['nome']);
    //print_r('<br>');
    //print_r('Sinopse do livro' . $_POST['sinopse']);
    //print_r('<br>');
    //print_r('Autor'. $_POST['autor']);
    //print_r('<br>');
    //print_r('data do lançamento' . $_POST['data_lancamento']);

    include_once('conexao2.php');
    $id = $_POST['id'];
    $nome = $_POST['titulo'];
    $descricao = $_POST['descricao'];
    $autor = $_POST['autor'];
    $preco = $_POST['preco'];

    $result = mysqli_query($conn, "INSERT INTO `livros`(`titulo`, `autor`, `preco`, `descricao`) VALUES ($nome, $autor, $descricao, $preco)");
}





?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de livros da Dybit</title>
    <style>
        .output {
  overflow: scroll;
  margin: 1rem 0;
  height: 200px;
}

    </style>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>
<body>

<?php 



?>
  <div class="container">
    <h1>Cadastro de Livros</h1>
    <form action="cadastro-de-livro.php" method="POST">
    <label for="titulo">id:</label>
    <input type="number" id="id" name="id" required>

        <label for="titulo">Titulo:</label>
        <input type="text" id="titulo" name="titulo" required>

        <label for="descricao">descricao:</label>
        <textarea id="descricao" name="descricao" rows="4" required></textarea>

        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor" required>

        <label for="data_lancamento">Preco:</label>
        <input type="number" id="Preco" name="Preco" required>

        <button type="submit" value="submit">Cadastrar livro</button>
    </form>
</div>
 
</body>
</html>
