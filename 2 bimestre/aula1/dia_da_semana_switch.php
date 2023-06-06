<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Dia semana switch</title>
</head>
<body>
    <?php
        echo "<h3>Dia da Semana - Estrutura Switch</h3>";
        $dia_semana = date("w");
        $mensagem = "";

        switch ($dia_semana)
        {
            case 0:
                $mensagem = "Domingo";
                break;
            case 1:
                $mensagem = "Segunda-feira";
                break;
            case 2:
                $mensagem = "Terça-feira";
                break;
            case 3:
                $mensagem = "Quarta-feira";
                break;
            case 4:
                $mensagem = "Quinta-feira";
                break;
            case 5:
                $mensagem = "Sexta-feira";
                break;
            case 6:
                $mensagem = "Sábado";
                break;
            default:
                $mensagem = "Erro!";
        }
        echo "<h3>Hoje é " . $mensagem . "</h3>";
    ?>
</body>
</html>