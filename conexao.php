<?php

    $server = "localhost";
    $user = "root";
    $pass = '';
    $bd = "Biblioteca_Dybit";
    
    if ($conn = mysqli_connect($server, $user, $Pass, $bd) ) {
        echo "Conectado!";
    } else
    echo "Erro!";


?>