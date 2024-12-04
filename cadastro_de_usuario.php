<?php
    
    include "conexao.php";
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $confirmar_senha = $_POST['confirmar_senha'];
        
        $sql = "INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `confirmar_senha`,
        VALUES ('$nome', '$email', '$senha', '$confirmar_senha')";
       
    
      header('Location: home-Dybit.php');

?>
