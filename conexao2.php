<?php
$server = "localhost";
$user = "root";
$pass = "usbw";
$banco = "livraria";

$conn = new mysqli($server, $user, $pass, $banco);

//i f ($conn = mysqli_connect($server, $user, $pass, $banco) ) {
    echo "Conectado!";
//}  else
// echo "Erro!";

?>