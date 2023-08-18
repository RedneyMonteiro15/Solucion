<?php
$servername = "localhost";
$username = "id21150569_usersolution";
$password = "Jumara@RE23.";
$bd  = "id21150569_dbsolution";

// Criar uma conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $bd );

// Verificar a conexão
if ($conn->connect_error) {
    echo 'não consegui comunicar';
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
} else{
    echo 'conetao com sucesso';
}   


?>