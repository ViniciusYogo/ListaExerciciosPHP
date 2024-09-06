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
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];
        $calculo = $_POST["calculo"];

        switch ($calculo) {
            case "Somar":
                $calcular = $num1 + $num2;
                echo ("<h1>A soma dos números da: $calcular</h1>");
                break;
            case "Subtrair":
                $calcular = $num1 - $num2;
                echo ("<h1>A subtração dos números da: $calcular</h1>");
                break;
            case "Multiplicar":
                $calcular = $num1 * $num2;
                echo ("<h1>A multiplicação dos números da: $calcular</h1>");
                break;
            case "Dividir":
                $calcular = $num1 / $num2;
                echo ("<h1>A divisão dos números da: $calcular</h1>");
        }


        ?>
    </div>
</body>

</html>