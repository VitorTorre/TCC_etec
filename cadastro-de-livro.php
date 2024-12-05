
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
    <form action="cadastro-livro-form.php" method="POST">
    
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" required>

        <label for="descricao">descricao:</label>
        <textarea id="descricao" name="descricao" rows="4" required></textarea>

        <label for="autor">Autor:</label>
        <input type="text" name="autor" required>

        <label for="Preco">Preco:</label>
        <input type="number" name="Preco" required>

        <button type="submit" class="btn-btn-success">Cadastrar livro</button>
    </form>
</div>
 
</body>
</html>
