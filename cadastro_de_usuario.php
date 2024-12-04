

<?php
    
    // Código de acesso que faz o login na Dybit com a conta do usuário
 session_start();
 require_once 'MySQL/conexao.php';
 
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nome = $conn->real_escape_string($_POST['nome']);
  $email = $conn->real_escape_string($_POST['email']);
  $senha = $conn->real_escape_string($_POST['senha']);
  $confirm_senha = $conn->real_escape_string($_POST['confirm_senha']);

  // Verificar se as senhas coincidem
  if ($senha === $confirm_senha) {
      // Criptografar a senha antes de armazenar
      $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

      // Inserir dados na tabela usuarios
      $sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha_hash')";

      if ($conn->query($sql) === TRUE) {
          echo "Cadastro realizado com sucesso!";
      } else {
          echo "Erro ao cadastrar: " . $conn->error;
      }
  } else {
      echo "As senhas não coincidem.";
  }
}

$conn->close();
?>

 // Verifica se o formulário foi submetido
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $email = $_POST["email"];
   $senha = $_POST["senha"];
 
     // Consulta ao banco de dados
   $query = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
   $result = $conn->query($query);
 
   if ($result->num_rows > 0) {
     $_SESSION["usuario"] = $email;
     header("Location: count-user.php");
     exit;
   } else {
     echo "Login ou senha incorretos!";
   }
  } else {
    // Se não foi submetido, exibe formulário
    include "form-login-Dybit.php";
  }

    include "MySql/conexao.php";
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $confirmar_senha = $_POST['confirmar_senha'];
        
        $sql = "INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `confirmar_senha`,
        VALUES ('$nome', '$email', '$senha', '$confirmar_senha')";
       
    
      header('Location: count-user.php');



?>
<form id="form-login">
    <label>Usuário:</label>
    <input type="text" id="usuario" name="usuario"><br><br>
    <label>Senha:</label>
    <input type="password" id="senha" name="senha"><br><br>
    <button id="btn-login">Entrar</button>
  </form>
  <div id="mensagem"></div>

  <script src="script.js"></script>