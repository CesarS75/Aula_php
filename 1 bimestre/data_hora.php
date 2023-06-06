<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Data e Hora em PHP</title>
</head>
<body>
    <?php
    setlocale(LC_ALL, 'portuguese'); 
    date_default_timezone_set("America/Sao_Paulo");
        // Define as variáveis para receber o dia, o mês e o ano
        $dia = date("d");
        $mes = date("F"); //M = ano em seculo;   F =  extenso (ingles)
        $ano = date("y");

        // Exibe a data do sistema operacional
        echo "<strong>Hoje é dia: </strong>" . $dia . " / " . $mes . " / " . $ano;

        // Define as variáveis para receber a hora, minuto e o segundo
        $hora = date("h");
        $minuto = date("m");
        $segundo = date("s");

        // Exibe a hora do sistema operacional
        echo "<br><strong>Agora são: </strong>" .
         $hora . " horas; " . $minuto . " minutos; " . $segundo . " segundos;";

    ?>
</body>
</html>

