<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Sobre as funções Include e Require</title>
</head>
<body>
    <?php
        require "cabecalho.php";
            echo "<p>";
                echo "A Função Include como o require, 
                permite importar informações de um arquivo. 
                A diferença é que ao utilizarmos a <b>Função Include</b>, o bloco de códigos não é interrompido 
                quando existe algum erro ao chamar o arquivo, ao contrário da <b>Função Require<b>";
            echo "</p>";
        echo "<hr>";
    ?>
</body>
</html>