<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Funções include e Require</title>
</head>
<body>

        <form name="strings" method="post" action=""> 
            <p>
                <label for="nome">Nome: </label>
                <input type="text" name="nome" maxlenght="40" required>
            </p>
            <p>
                <input type="submit" name="executar" value="Executar">
            </p>
        </form>

    <?php
        if(isset($_POST['executar']))
        {
            $nome = $_POST["nome"];
            $nome = strtolower($nome);
            echo "<h3>Converte para minúsculas </h3>";
            echo "<b>Nome:</b> $nome";

            echo "<h3>Converte para maiúsculas </h3>";
            $nome = strtoupper($nome);
            echo "<b>Nome:</b> $nome";

        }

        include "rodape.php";
    ?>
</body>
</html>