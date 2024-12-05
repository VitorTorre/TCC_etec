<?php
$server = "localhost";
$user = "root";
$pass = "usbw";
$banco = "livraria";

$conn = new mysqli($server, $user, $pass, $banco);

//if ($conn = mysqli_connect($server, $user, $pass, $banco) ) {
    echo "Conectado!";
//}  else
// echo "Erro!";

function mensagem($texto, $tipo) {
    echo "<div class='alert alert-$tipo' role='alert'>
              $texto
             </div>";
  }
?>