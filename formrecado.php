<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recado</title>
    <link rel="stylesheet" href="./formrecado.css">
</head>
<body>

    <form action="recado.php" method="post">
    
        <div class= "container">
        <h1>RECADO</h1>   
        <br>
        <input type="text" name="id" id="id" placeholder="ID">
        <br>
        <input type="text" name="recado" id="recado" placeholder="Recado">
        <br>
        <input type="date" name="data" id="data" placeholder="Data">
        <br>
        <input type="submit" name="btnGerar" id="btnGerar" placeholder="Gerar">
        <br>
        </div> 
    </form>
</body>
</html>