<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="./index.css">
<body>
    <style>
        body{
    background-color: #E6E6FA; 
}

#title{
    font-family: Verdana, Geneva, Tahoma, sans-serif;
  color: white;
  font-style: oblique;
  text-shadow: black 0.1em 0.1em 0.2em
}

.botao{
    background-color:white;
    font-family:Verdana, Geneva, Tahoma, sans-serif;
    color: black;
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
.login{
    background-color:white;
}

h3{
font-family: Verdana, Geneva, Tahoma, sans-serif;
font-size: 15px;
color: black;
}
    </style>
<form action="login.php" method="post">
    <div class="container" >
    <h1 id="title" >LOGIN</h1>
        <input type="text" name="email" class="login" placeholder="Informe seu e-mail">
         <br>
        <input type="password" name="senha" class="login" placeholder="Informe sua senha">
         <br>
         <input class="botao" type="submit" value="Entrar">
         <a href="portal.php"> <h1>portal</h1></a>
         <br>
         <h3 id="cad" >Novo por aqui? <a href="formcad.php">Cadastre-se</a></h3>
         </div>
    </form>
</body>
</html>