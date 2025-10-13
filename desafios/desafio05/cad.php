<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../desafio01/style.css">
    <title>Resultado</title>
    <?php 
    $url = "https://economia.awesomeapi.com.br/last/USD-BRL";
    $dados = file_get_contents($url);
    $cotacao_info = json_decode($dados);
    $cotacao_dolar = $cotacao_info->USDBRL->ask;
    ?>
</head>
<body>
    <header>
        <h1>Conversor de Moedas v1.0</h1>
    </header>
    <main>
        <?php
            $valor_real = $_GET['valor_real'] ?? 0;
            $valor_dolar = $valor_real / (float)$cotacao_dolar;

        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>