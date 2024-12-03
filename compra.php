<?php
// Conectar ao banco de dados

include "MySql/conexao.php";
$idtitulo = $_POST['id'];
$titulo = $_POST['titulo'];
$Autor = $_POST[''];
$genero = $_POST['genero'];
$conn = mysqli_connect("localhost", "usuario", "senha", "banco");

// Verificar se a conexão foi estabelecida
if (!$conn) {
  die("Conexão falhou: " . mysqli_connect_error());
}

// Recuperar dados do formulário
$id_livro = $_POST['id_livro'];
$preco = $_POST['preco'];

// Gerar código de compra
$codigo_compra = uniqid();

// Inserir dados no banco de dados
$query = "INSERT INTO compras (id_livro, preco, codigo_compra) VALUES ('$id_livro', '$preco', '$codigo_compra')";
mysqli_query($conn, $query);

// Redirecionar para página de pagamento
header("Location: pagamento.php?codigo_compra=$codigo_compra");
exit;
?>