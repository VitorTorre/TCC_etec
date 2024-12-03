<php 
$stmt = $conn->prepare("INSERT INTO livros (ID, Titulo, Autor, Preco, Resumo, Conteudo) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssdsds", $id, $titulo, $autor, $preco, $resumo, $conteudo);
$stmt->execute();



<?php
    
    // Código de acesso que faz o cadastro na biblioteca dinâmica com a conta do usuário
 session_start();
 require_once 'MySQL/conexao.php';
 
 // Verifica se o formulário foi submetido
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idlivro = $_POST["idlivro"];
    $titulo = $_POST["titulo"];
 
     // Consulta ao banco de dados
   $query = "SELECT * FROM idlivro WHERE idtitulo = '$idlivro' AND titulo = '$titulo'";
   $result = $conn->query($query);
 
   if ($result->num_rows > 0) {
     $_SESSION["idtitulo"] = $idtitulo;
     header("Location: count-user.php");
     exit;
   } else {
     echo "Login ou senha incorretos!";
   }
  } else {
    // Se não foi submetido, exibe formulário
    include "home-Dybit.php";
  }

    include "MySql/conexao.php";
        $idtitulo = $_POST['id'];
        $titulo = $_POST['titulo'];
        $Autor = $_POST[''];
        $genero = $_POST['genero'];
        $confirmar_senha = $_POST['confirmar_senha'];
        
        $sql = "INSERT INTO `titulo` (`idtitulo`, `titulo`, `Autor`, `genero`, `confirmar_senha`,
        VALUES ('$titulo', '$Autor', '$genero', '$confirmar_senha')";
       
    
      header('Location: listgem-de-livros.html');

?>
<form id="form-login">
    <label>Título:</label>
    <input type="text" id="usuario" name="usuario" alt="Título do livro"><br><br>
    <label>Senha do Admin:</label>
    <input type="password" id="senha" name="senha" alt="Digite a senha de admin aqui"><br><br>
    <button id="btn-login">Entrar</button>
  </form>
  <div id="mensagem"></div>

  <script src="script.js"></script>