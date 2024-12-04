<?php
session_start();
include 'MySQL/conexao.php';

// Verifica se o usuário está logado
if (!isset($_SESSION["usuario"])) {
    header("Location: count-user.php");
  }
  
  // Exibe dados do usuário
  $email = $_SESSION["usuario"];
  $mysqli_query = "SELECT * FROM usuarios WHERE email = '$email'";
  $result = $conn->query($query);
  $usuario = $result->fetch_assoc();

  $query = "INSERT INTO us (idLivro, titulo, autor, genero, preco) 
          VALUES ('$idLivro', '$titulo', '$autor', '$genero', $preco)";
  
  if ($conn->query($query) === TRUE) {
    echo "Usuário cadastrado com sucesso! email: " . $email;
} else {
    echo "Erro ao cadastrar livro: " . $conn->error;
}

  // Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);

}
?>