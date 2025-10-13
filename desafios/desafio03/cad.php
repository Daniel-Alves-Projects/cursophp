<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../desafio01/style.css">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Conversor de Moedas v1.0</h1>
    </header>
    <main>
        <?php 
            $valor = $_GET['valor'] ?? 0;
            $valor = str_replace(',', '.', $valor);
            $valor = (float) $valor;
            $cotacao = 5.22;
            $conversao = $valor * $cotacao;
            echo "<p>Seus <strong> R$ $valor equivalem a $ $conversao <strong> </p>"
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>