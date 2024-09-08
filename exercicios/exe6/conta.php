<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>banco</title>
    <link rel="stylesheet" href="./estilo.css">
</head>

<body>
    <?php
    session_start();
    ?>

    <h1 class="apagado" id="saindo">Saindo do sistema</h1>



    <form action="conta.php" method="post" id="formulario" class="formulario">
        <h1>Conta</h1>
        <br>
         <select id="opcao" name="opcao" onchange="escolha()">
            <option disabled selected>Escolha uma opção</option>
            <option value="saldo">1- Ver Saldo</option>
            <option value="depositar">2- Depositar</option>
            <option value="sacar">3- Sacar</option>
            <option value="sair">4- Sair</option>
        </select>
        <br>
        <input type="number" class="valor" id="valor" name="valor" min="0">
        <br>
        <button type="submit">Escolher</button>
    </form>


    <section class="aparecendo" id="info">

        <?php



        if (!isset($_SESSION["saldo"])) {
            $_SESSION["saldo"] = 0;
        }


        $valor = isset($_POST["valor"]) ? (float)$_POST["valor"] : 0;
        $opcao = isset($_POST["opcao"]) ? $_POST["opcao"] : '';

        switch ($opcao) {
            case "saldo":
                echo("O seu saldo é de: R$" .$_SESSION["saldo"]);
                break;
            case "depositar":
                $_SESSION["saldo"] += $valor;
                echo ("O valor depositado foi de $valor<br>");
                echo ("O seu saldo é de: R$" .$_SESSION["saldo"]);
                break;
            case "sacar":
                if ($_SESSION["saldo"] > 0 and $_SESSION["saldo"] >= $valor) {
                    $_SESSION["saldo"] -= $valor;
                    echo ("O valor sacado foi de $valor<br>");
                    echo ("O seu saldo é de: R$" .$_SESSION["saldo"]);
                } elseif ($_SESSION["saldo"] < $valor) {
                    echo ("<h1>Saldo insuficiente</h1>");
                };
                break;
        }
        ?>
    </section>


    <script>
        function escolha() {
            var opcao = document.getElementById('opcao').value;
            var formulario = document.getElementById('formulario');
            var info = document.getElementById('info');
            var saindo = document.getElementById('saindo');
            var valorInput = document.getElementById('valor');

            if (opcao == "saldo") {
                valorInput.style.opacity = "0";
                formulario.classList.remove('apagado');
                saindo.classList.add('apagado');
            } else if (opcao == "depositar" || opcao == "sacar") {
                valorInput.style.opacity = "1";
                formulario.classList.remove('apagado');
                saindo.classList.add('apagado');
            } else if (opcao == "sair") {
                formulario.classList.add('apagado');
                info.classList.add('apagado');
                saindo.classList.remove('apagado');
            } else {
                formulario.classList.remove('apagado');
                info.classList.remove('apagado');
                saindo.classList.add('apagado');
            }
        }


 
    </script>
</body>

</html>