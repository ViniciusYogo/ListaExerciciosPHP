<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form>
        <?php
        $nome = $_POST["inputNome"];
        $nota = $_POST["inputNota"];

        if ($nota <= 10 and $nota >= 0) {
            switch ($nota) {
                case 10:
                    echo "<h1>Nota A</h1>";
                    break;
                case 9:
                    echo "<h1>Nota B</h1>";
                    break;
                case 8 or 7:
                    echo "Nota C";
                    break;
                case 6 or 5:
                    echo "Nota D";
                    break;
                default:
                    echo "Nota E";
            }
        } else {
            echo "Nota fora do padrão";
        }
        ?>
    </form>
</body>

</html>