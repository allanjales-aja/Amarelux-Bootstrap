<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "amarelux";

    $conn = mysqli_connect($servername, $username, $password, $database);
    mysqli_set_charset($conn,"utf8");
    if (!$conn) {
        die("Falha na conexão com $database: ".mysqli_connect_error());
    }

?>