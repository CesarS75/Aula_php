<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receitas</title>
</head>
<body>
    <?php
echo "<body style='background-color:#BBDDCC'>";
    echo "<h1>Controle de gastos</h1>";

        echo "<h2>Receitas</h2>";
            $receita1 =1400;
            $receita2 = 700;

            echo "<b>Receita 1: </b>R$" . number_format ($receita1,2,",",".");
            echo "<br><b>Receita 2: </b>R$" . number_format ($receita2,2,",",".");

        echo "<h2>Despesas</h2>";
            $despesa1 = 80;
            $despesa2 = 100;
            $despesa3 = 120;
            $despesa4 = 140;
            $despesa5 = 160;
            $despesa6 = 180;

            echo "<font color='f400a1'> <b> Desepesa 1: </b></font>R$" . number_format ($despesa1,2,",",".");
            echo "<font color='f400a1'> <br><b> Desepesa 2: </b></font>R$" . number_format ($despesa2,2,",",".");
            echo "<font color='f400a1'> <br><b> Desepesa 3: </b></font>R$" . number_format ($despesa3,2,",",".");
            echo "<font color='f400a1'> <br><b> Desepesa 4: </b></font>R$" . number_format ($despesa4,2,",",".");
            echo "<font color='f400a1'> <br><b> Desepesa 5: </b></font>R$" . number_format ($despesa5,2,",",".");
            echo "<font color='f400a1'> <br><b> Desepesa 6: </b></font>R$" . number_format ($despesa6,2,",",".");


        $Total_receitas = $receita1 + $receita2;
        $Total_despesas = $despesa1 + $despesa2 + $despesa3 + $despesa4 + $despesa5 + $despesa6;
        
echo "<hr size='2' color='gray' width='10%' align=left>";
    echo "<br><b> Receita 1........: </b>R$" . number_format ($receita1,2,",",".");
    echo "<br><b> Receita 2........: </b>R$" . number_format ($receita2,2,",",".");
    echo "<br><font color='blue'><h3> Total das receitas: $Total_receitas </h3></font>";

echo "<hr size='2' color='gray' width='100%'>";

    echo "<b><font color='f400a1'> Despesa 1........: </b></font>R$" . number_format ($despesa1,2,",",".");
    echo "<br><b><font color='f400a1'> Despesa 2........: </b></font>R$" . number_format ($despesa2,2,",","."); 
    echo "<br><b><font color='f400a1'> Despesa 3........: </b></font>R$" . number_format ($despesa3,2,",",".");
    echo "<br><b><font color='f400a1'> Despesa 4........: </b></font>R$" . number_format ($despesa4,2,",",".");
    echo "<br><b><font color='f400a1'> Despesa 5........: </b></font>R$" . number_format ($despesa5,2,",",".");
    echo "<br><b><font color='f400a1'> Despesa 6........: </b></font>R$" . number_format ($despesa6,2,",",".");
    echo "<font color='purple'> <h3> Total das despesas: $Total_despesas </h3></font> <br>";

    if ($Total_receitas > $Total_despesas) {
        echo "<font color='green'><h3>Crédito</h3></font>";
    } else {
        echo "<font color='red'><h3>Débito</h3></font>";
    }
    ?>
</body>
</html>