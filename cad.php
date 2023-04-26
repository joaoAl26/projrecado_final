<?php
include("config.php");

$nome = mysqli_real_escape_string($conn, $_POST['nome']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);
$senha_md5 = md5($senha); 

// Insere os dados no MySQL
$query = "INSERT INTO tbusuario (nome, email, senha) VALUES ('$nome', '$email', '$senha_md5')";
$resultado = mysqli_query($conn, $query);

if (!$resultado) {
	die("Erro ao inserir os dados no MySQL: " . mysqli_error($conexao));
}

mysqli_close($conn);

header("Location: index.php");
