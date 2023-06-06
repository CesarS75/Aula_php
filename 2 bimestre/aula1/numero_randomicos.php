<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Números randomicos</title>
</head>
<body>
    <?php
        echo "<h3>NÚMEROS RANDÔMICOS - LOOPING WHILE</h3>";
            $numero = 0;
            $contador = 1;

            while($contador <= 7)
            {
                $numero = rand(1,10);
                echo "<em>$contador</em> número gerado foi: <strong>". $numero . "</strong><br>";
                $contador++;
            }
        
        echo "<h2>Fim do looping <strong> <em>WHILE</em> </strong> </h2> <hr>";

        echo "<br> <h3>NÚMEROS RANDOMICOS - LOOPING FOR</h3>";

            for($contador = 1; $contador <= 10; $contador++){
                $numero = rand(1,10);
                echo "<em>$contador</em> número gerado foi: <strong>". $numero . "</strong><br>";    
            }

        echo "<h2>Fim do looping <strong> <em>FOR</em> </strong> </h2> <hr>";
    ?>
</body>
</html>