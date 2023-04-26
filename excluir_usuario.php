<?php
session_start();

if (!isset($_SESSION["id"])) {
	header("Location: login.php");
	exit();
}

include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if ($_POST["confirmacao"] == "sim") {
		$id = $_SESSION["id"];
		$sql = "DELETE FROM tbusuario WHERE id=$id";
		
        if (mysqli_query($conn, $sql)) {
			// encerrar a sessão
			session_destroy();
			echo "Usuário excluído com sucesso.";
		} else {
			echo "Erro ao excluir usuário: " . mysqli_error($conn);
		}
		exit();
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Excluir cadastro</title>
	<link rel="stylesheet" href="./excluir_usuario.css">
</head>
<body>
	<h1>Excluir cadastro</h1>
	<p>Tem certeza que deseja excluir sua conta?</p>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<div class="container"> 
		<input type="radio" name="confirmacao" value="sim">Sim<br>
		<input type="radio" name="confirmacao" value="nao" checked>Não<br>
		<input type="submit" name="submit" value="Excluir"></div>
	</form>
</body>
</html>