<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "Biblioteca_Dybit";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verificar se os dados foram enviados
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
