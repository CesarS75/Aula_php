<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Matemáticos</title>
</head>
<body>
    <?php

    echo "<h3>Operadores matemáticos em PHP</h3>";
    echo "<hr size='3' color='#ff0000' width='62%' align='left'>";
    $numero1=10;
    $numero2=15;
    echo "<br><strong>Numero 1: </strong>$numero1";
    echo "<br><strong>Numero 2: </strong>$numero2";

    echo "<br><strong> Efetuando a soma do numero 1 </strong>($numero1)<strong> mais o numero 2 </strong>($numero2)";
        $soma = $numero1 + $numero2;
        echo "<br><strong>Resultado: </strong>$soma";
    //É possível inserir tags html no php, pórem essas tags deverão ficar dentro das aspas.
    echo "<hr size='3' color='#ff0000' width='62%' align='left'>";

    echo "<br><strong>Efetuando a subtração do numero 1</strong> ($numero1)<strong> com o numero 2</strong> ($numero2)";
        $subtracao = $numero1 - $numero2;
        echo "<br><strong>Resultado: </strong> $subtracao";

    echo "<hr size='3' color='#ff0000' width='62%' align='left'>";

    echo "<br><strong>Efetuando a multiplicação do numero 1</strong> ($numero1)<strong> com o numero 2</strong> ($numero2)";
        $multiplicacao = $numero1 * $numero2;
        echo "<br><strong>Resultado: </strong> $multiplicacao";

    echo "<hr size='3' color='#ff0000' width='62%' align='left'>";

    echo "<br><strong>Efetuando a divisão do numero 1</strong> ($numero1)<strong> com o numero 2</strong> ($numero2)";
        $divisao = $numero1 / $numero2;
        echo "<br><strong>Resultado: </strong> $divisao";

    echo "<hr size='3' color='#ff0000' width='62%' align='left'>";

    echo "<h4>Exibindo o tipo da variável</h4>";
        echo "<strong>Numero 1: </strong>";
            echo var_dump($numero1); //Exibe o tipo int
        echo "<br><strong>Numero 2: </strong>";
            echo var_dump($numero2); //Exibe o tipo int
    ?>
</body>
</html>