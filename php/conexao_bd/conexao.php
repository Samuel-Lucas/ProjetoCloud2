<?php
    $servername = "samuel123.hopto.org";
    $username = "samuel";
    $password = "5Fg@60r*1mwY";
    $database = "produtos";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn) {
        die("Falha na conexão: ". mysqli_connect_error());
    }
?>