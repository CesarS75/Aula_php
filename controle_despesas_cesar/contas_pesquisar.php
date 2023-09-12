<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos_menu.css">
    <title>Controle de Despesas - Pesquisas</title>
</head>
<body>
    <?php
        require "menu.php";

        echo "<h3>Listagem das Contas</h3>";
        require "conexao.php";
        $sql = "SELECT * FROM contas ORDER BY valor";
        $resultado=mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
        echo "<table border='1' width='1000' align='center'>";
            echo "<tr>";
                echo "<th width='100' align='right'>Lançamento</th>";
                echo "<th width='300' align='left'>Código</th>";          
                echo "<th width='100' align='left'>Data</th>";
                echo "<th width='250' align='left'>E-Mail</th>";
                echo "<th width='50' align='left'>Editar</th>";
            echo "</tr>";
    
            while ($linha=mysqli_fetch_array($resultado)) {
                $lancamento = $linha["lancamento"];
                $codigo = $linha["codigo"];
                $data = $linha["data"];
                $valor = $linha["valor"];
                $historico = $linha["historico"];
    
                // Exibindo os dados

            echo "<tr>";
                echo "<td width='100' align='right'>$lancamento</td>";
                echo "<td width='300' align='left'>$codigo</td>";          
                echo "<td width='100' align='right'>$data</td>";
                echo "<td width='250' align='right'>$valor</td>";
                echo "<td width='250' align='rigth'>$historico</td>";
                echo "<td width='50'> <a href='contas_editar.php?codigo=$codigo'>Editar</td>";
            echo "</tr>";
            }
    ?>


</body>
</html>
