<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Constant em PHP</title>
</head>
<body>
    <?php
    echo "<h3 align='center'>EXEMPLO DE CONSTANT EM PHP</h3>";
    
    // definição da constante
    define("linguagem","PHP - Linguagem Dinâmica");
    echo "<strong>Linguagem: </strong>" . linguagem;
    
    define("caracteristica","A cada característica da linguagem PHP, é que necessita de
          servidor para interpretar, ou seja, <u>compilar o código</u>.");
    echo "<br><strong>Característica: </strong>" . caracteristica;

    ?>
</body>
</html>