
<?php

include "MySQL/conexao.php";
    
$username = $_POST['username'];
$email = $_POST['email'];
$senha = $_POST['password'];

$sql = "INSERT INTO `usuarios`(`username`, `email`,`password`) 
VALUES ('$username', '$email', '$senha')";

header('Location: Libary view.php');


if (mysqli_query($conexao, $sql)) {
  mensagem("$username cadastrado com sucesso!",'success');
} else 
  mensagem("$username NÃO cadastrado com sucesso!",'danger');
?>
