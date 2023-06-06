<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcula e exibe a soma</title>
    <style type="text/css">
        h3 {
            color: blue;
            border-bottom: 1px solid blue;
        }
    </style>
</head>
<body>
    <?php
        echo "<h3><center>CALCULA E EXIBE A SOMA</h3>";
        // Recuperando conteudo digitado na caixa1 e caixa2 da pagina de soma2numeros
        $numero1 = $_POST["num1"]; 
        $numero2 = $_POST["num2"];

        echo "<b>Número 1:</b> $numero1";
        echo "<br><b>Número 2:</b> $numero2";

        $soma = $numero1 + $numero2;
        echo "<br><b>Resultado da soma:</b> <u>$soma</u>";

    ?>
</body>
</html>