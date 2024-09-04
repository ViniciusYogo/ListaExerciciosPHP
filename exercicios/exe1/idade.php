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
        $email = $_POST["inputEmail"];
        $idade = $_POST["inputIdade"];

        if ($idade >= 18) {
            echo ("O seu nome é $nome <br>" );

            echo ("O sua idade é $idade <br>");

            echo ("O seu email é $email");
        } else {
            echo ("Não pode se cadastrar");
        }


        ?>
    </form>
</body>

</html>