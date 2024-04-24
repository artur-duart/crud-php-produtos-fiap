<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "db_produtos";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Erro de conexão com o banco de dados: " . $conn->connect_error);
}
