<?php

include "conexao2.php";

$nome = $_POST['titulo'];
$descricao = $_POST['descricao'];
$autor = $_POST['autor'];
$preco = $_POST['Preco'];

$result = "INSERT INTO `livros`(`titulo`, `autor`, `Preco`, `descricao`) 
VALUES ('$nome', '$autor', '$preco', '$descricao')";

if (mysqli_query($conn, $result)) {
    mensagem("$nome cadastrado com sucesso!",'success');
 } else 
    mensagem("$nome NÃO cadastrado com sucesso!",'danger');

?>
