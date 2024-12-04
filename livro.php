<?php
require_once 'MySQL/conexao.php';

$id_livro = $_GET['id'];

$query = "SELECT * FROM livros WHERE id = '$id_livro'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
  $row = $result->fetch_assoc();
  ?>
  <h1><?php echo $row['titulo']; ?></h1>
  <p>Autor: <?php echo $row['autor']; ?></p>
  <p>Sinopse: <?php echo $row['sinopse']; ?></p>
  <p>Valor: <?php echo $row['sinopse']; ?></p>
  <?php
} else {
  echo "Livro não encontrado.";
}
$conn->close();
?>