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
        $valor = $_POST["valor"];
        $opcao = $_POST["opcao"];
        

        switch ($opcao) {
            case "1":
                echo ("<h1>O seu saldo é de: R$ $saldo</h1>");

                break;
            case "2":
                $saldo += $valor;
                echo ("<h1>O valor depositado foi de $valor</h1> <br>");
                echo ("<h1>O seu saldo é de: R$ $saldo</h1>");
                break;
        }
        ?>

        <button><a href="index.html">Voltar</a></button>
    </div>


</body>

</html>