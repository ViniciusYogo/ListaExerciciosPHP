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
        $numero = $_POST["numero"];

        if($numero%2== 0){
            echo("<H1>O número $numero é par</H1>");
        }
        else{
            echo("<H1>O número $numero é impar</H1>");
        };
        ?>
    </div>
</body>

</html>