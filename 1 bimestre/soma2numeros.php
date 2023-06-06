<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de dois numeros com formularios</title>
    <style type="text/css">
        h3 {
            color: blue;
            border-bottom: 1px solid blue;
        }
        label{
            color: blue;
        }
        input {
            margin-left: 5px;
        }
        </style>
</head>
<body>

    <?php
        echo "<h3><center>Soma de 2 Números</h3>";
        echo "<form name='soma' method='post' action='exibir_soma.php'>";
        echo "<p>";
            echo "<label for='numero1'>Número 1:</label>";
            echo "<input type='text' name='num1' size=4 maxlength=4 required>";
        echo "<p>";

        echo "<p>";
            echo "<label for='numero2'>Número 2:</label>";
            echo "<input type='text' name='num2' size=4 maxlength=4 required>";
        echo "<p>";

        echo "<p>";
            echo "<input type='submit' value='Somar' name='somar'>";
            echo "<input type='reset' value='Limpar' name='limpar'>";
        echo "<p>";
        echo "</form>";
    ?>

</body>
</html>