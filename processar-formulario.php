<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "contato";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$sql_create = "CREATE TABLE contato (
    nome VARCHAR(50) NOT NULL,
    email VARCHAR(150) NOT NULL,
    mensagem VARCHAR(255) NOT NULL
)";

$sql_insert = "INSERT INTO contato (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')";

// $result_create_query = $conn->query($sql_create);

// echo $result_create_query;

if (!$conn->query($sql_create)) {
    $conn->query($sql_insert);
} else {
    $conn->query($sql_create);
}

if ($conn->query($sql) === TRUE) {
    echo "Formulário enviado com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
