<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Usuários</title>
	<link rel="stylesheet" href="./formcad.css">
</head>
<body>
	<style>
		body{
    background-color: #E6E6FA; 
}

#title{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
    text-align: center;
    color: white;
    font-style: oblique;
    text-shadow: black 0.1em 0.1em 0.2em
}
.container{
    margin: 200px auto;
    background-color:#D8BFD8;
    height:10cm;
    width: 10cm;
    display:flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
    box-shadow: 5px 10px #B0E0E6; 
}
.botao{
    background-color:rgb(189, 129, 204);
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    color: black;
}
	</style>
    <form action="cad.php" method="post">
        <div class = "container" >
    <h1 id="title" >Formulário de Cadastro</h1>
        <input type="text" name="nome" id="nome" placeholder="Nome"><br>
        <input type="email" name="email" id="email" placeholder="E-mail"><br>
        <input type="password" name="senha" id="senha" placeholder="Senha"><br>
        <input class="botao" type="submit" value="Enviar"><br>
        <button class="botao"><a href="./index.php">Voltar</a></button>
</div>
</form>
</body>
</html>