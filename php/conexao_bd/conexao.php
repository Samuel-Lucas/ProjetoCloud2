<?php
    $servername = "192.168.0.79";
    $username = "samuel";
    $password = "5Fg@60r*1mwY";
    $database = "produtos";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn) {
        die("Falha na conexão: ". mysqli_connect_error());
    }
?>
