
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="./editar_recado.css"> 
	<title>Editar cadastro</title>
</head>
<body>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	<div class="container">
	<br>
		<h1>Editar recado</h1>
    <textarea name="recado" id="recado" cols="30" rows="15"></textarea>
		<br>
		<h2>Data:</h2>
		<input type="text" name="data" value="<?php echo $data; ?>" placeholder="Data:">
		<br>
		<input class="botao" type="submit" name="submit" value="Salvar">
        <br>
        <button class="botao"><a href="./portal.php">Cancelar</a></button>
	</div>
	</form>
</body>
