<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>

        <?php
        $usuario=$_POST["usuario"];
        $senha=$_POST["senha"];

        if ($usuario== "admin" and $senha ==1234){
            echo("<H1>Login bem-sucedido</H1>");
        }else{
            echo("<H1>Login ou senha incorretos</H1>");
        }
        ?>
    </div>
</body>

</html>