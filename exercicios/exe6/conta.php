<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<form action="conta.php" method="post">
        <h1>Conta</h1>
        <br>
        <select id="opcao" name="opcao" onchange="escolha()">
            <option disabled selected>Escolha uma opção</option>
            <option value=1>1- Ver Saldo</option>
            <option value=2>2- Depositar</option>
            <option value=3>3- Sacar</option>
            <option value=4>4- Sair</option>
        </select>
        <br>
        <input type="number" class="valor" id="valor" name="valor">
        <br>
        <button type="submit">Escolher</button>
    </form>

    <script>
        function escolha() {
            var opcao = document.getElementById('opcao').value;

            if(opcao == 2 || opcao == 3){
                var valor = document.getElementById('valor').style.opacity=1
            }
            else{
                var valor = document.getElementById('valor').style.opacity=0
            }
        }
    </script>
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