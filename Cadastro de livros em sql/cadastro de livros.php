
<?php
require_once 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $titulo = $_POST['titulo'];
  $autor = $_POST['autor'];
  $genero = $_POST['genero'];
  $descricao = $_POST['descricao'];

  $sql = "INSERT INTO livros (titulo, autor, genero, descricao) VALUES (?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssss", $titulo, $autor, $genero, $descricao);

  if ($stmt->execute()) {
    echo "Livro cadastrado com sucesso!";
  } else {
    echo "Erro ao cadastrar livro: " . $conn->error;
  }
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Cadastro de Livros</title>
</head>
<body>
  <h1>Cadastro de Livros</h1>
  <form action="" method="post">
    <label for="titulo">Título:</label>
    <input type="text" id="titulo" name="titulo"><br><br>
    <label for="autor">Autor:</label>
    <input type="text" id="autor" name="autor"><br><br>
    <label for="genero">Gênero:</label>
    <select id="genero" name="genero">
      <option value="Romance">Romance</option>
      <option value="Ficção">Ficção</option>
      <option value="Mistério">Mistério</option>
      <option value="Outro">Outro</option>
    </select><br><br>
    <label for="descricao">Descrição/Sinopse:</label>
    <textarea id="descricao" name="descricao"></textarea><br><br>
    <input type="submit" value="Cadastrar">
  </form>
</body>
</html>