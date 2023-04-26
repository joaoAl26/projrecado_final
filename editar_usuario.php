<?php

session_start();

if (!isset($_SESSION["id"])) {
	header("Location: login.php");
	exit();
}

include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$id = $_SESSION["id"];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);

	$sql = "UPDATE tbusuario SET nome='$nome', email='$email', senha='$senha' WHERE id=$id";

	if (mysqli_query($conn, $sql)) {
		echo "<script>alert('Usuário atualizado com sucesso');</script>";
	} else {
		echo "Erro ao atualizar usuário: " . mysqli_error($conn);
	}

	$_SESSION["nome"] = $nome;
	$_SESSION["email"] = $email;
	$_SESSION["senha"] = $senha;

	header("Location: perfil.php");
	exit();
}else{

	$id = $_SESSION["id"];
	$sql = "SELECT * FROM tbusuario WHERE id=$id";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_assoc($result);
	$nome = $row['nome'];
	$email = $row['email'];
	$senha = $row['senha'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar editar_usuario</title>
    <link rel="stylesheet" href="./editar_usuario.css">
</head>
<body>
	<h1>Editar cadastro</h1>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		Nome:
        <input type="text" name="nome" value="<?php echo $nome; ?>">
		<br>
		Email:
		<input type="email" name="email" value="<?php echo $email; ?>">
		<br>
		Senha:
		<input type="password" name="senha" value="<?php echo $senha; ?>">
		<br>
		<input type="submit" name="submit" value="Salvar">
        <br>
        <button class="botao"><a  href="./index.php" >Voltar</a></button>
	</form>
</body>
</html>