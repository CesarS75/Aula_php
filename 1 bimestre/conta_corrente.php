<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle Bancário em PHP</title>
</head>
<body>
<?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") // Se os dados foram cadastrados no formulário
    {
        echo "<h3>CONTROLE BANCÁRIO EM PHP</h3>";
        $nome_banco = ""; // Armazena nome do banco
            $TipoDeConta = ""; // Armazena o tipo da conta
                $nome_correntista =  $_POST["nome"];
                echo "<strong>Nome do correntista: </strong>" . $nome_correntista;
                    $banco = $_POST["banco"];
                    echo "<br><strong>Nome do Banco: </strong>" . $banco;

        
        
        
        if ($banco == "caixa")
        $nome_banco = "Caixa Econômica Federal";
            
            else if ($banco == "santander")
            $nome_banco = "Banco Santander";
                
                else if ($banco == "mercantil")
                $nome_banco = "Banco Mercantil do Brasil";
                    
                    else if ($banco == "brasil")
                    $nome_banco = "Banco do Brasil";
                        
                        else if ($banco == "bradesco")
                        $nome_banco = "Banco Bradesco";
                            
                            else
                            $nome_banco = "Você não selecionou o Banco!!";
                            echo "<br><strong>Nome do Banco: </strong>" . $nome_banco;
    }

    else {
        echo "Atenção, você tem que cadastrar os dados primeiro!!";
        echo "<p> <a href='banco_cc.php'> Cadastro da Conta Corrente</a></p>";
    }
?>
</body>
</html>