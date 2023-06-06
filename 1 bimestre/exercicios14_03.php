<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios 14/03</title>
</head>
<body>

    <?php
    echo "<body style='background-color:#BBDDCC'>";
        echo "<h1> Cálculo de mensalidade</h1>";

        echo "<hr size='3' color='#993399' width='80%' align='left'>";

        $nome = "Cesar Savoldi";
        $VlrCurso = 4004.04;
        $ano = 2023;
        $parcelas = 4;
        $mensalidade = $VlrCurso / $parcelas;

        echo "<b>Nome do aluno..............: </b>" . "<b> <i> $nome </i> </b>";
        echo "<br> <b>Valor do curso...............: </b>R$ " . number_format ($VlrCurso,2,",",".");
        echo "<br> <b>Ano.................................: </b>" . $ano;
        echo "<br> <b>Qtd de parcelas.............: </b>" . $parcelas;
        echo "<br> <b>Valor da mensalidade...: </b>R$ " . number_format ($mensalidade,2,",",".");

        echo "<hr size='3' color='#993399' width='80%%' align='left'>";


        echo "<h3> <b> <u>Tipo de variáveis utilizadas</u> </b> </h3>";
        echo 'string(13) "Cesar Savoldi" float(4004.04) int(2023) int(6)';
    ?>
    
</body>
</html>