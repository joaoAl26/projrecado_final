<?php
<?php
include("config.php");

$recado = mysqli_real_escape_string($conn, $_POST['recado']);
$data = mysqli_real_escape_string($conn, $_POST['data']);

$query = "INSERT INTO tbrecado (recado, data) VALUES ('$recado', '$recado')";
$resultado = mysqli_query($conn, $query);

if (!$resultado) {
	die("Erro ao inserir os dados no MySQL: " . mysqli_error($conexao));
}

mysqli_close($conn);

header("Location: portal.php");

?>