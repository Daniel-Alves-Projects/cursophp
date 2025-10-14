<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../desafio01/style.css">
    <title>Resultado</title>
    <?php 
    $data_hoje = date('m-d-Y');
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarDia(dataCotacao=@dataCotacao)?@dataCotacao=\'' . $data_hoje . '\'&$top=100&$format=json';
    $dados_json = @file_get_contents($url);
    $dados_objeto = json_decode($dados_json);
    $cotacao_dolar = $dados_objeto->value[0]->cotacaoVenda ?? 0;
    // Se a cotação for 0 (ex: fim de semana ou feriado), exibe um erro.
            if ($cotacao_dolar == 0) {
                echo "<p>Não foi possível obter a cotação do dólar para hoje. A API pode estar indisponível em fins de semana ou feriados.</p>";
            } else {
                // 6. RECEBER O VALOR DO USUÁRIO E CONVERTER
                $valor_real_string = $_GET['valor_real'] ?? '0';
                $valor_real = (float) str_replace(',', '.', $valor_real_string); // Trata vírgula e ponto

                // 7. CALCULAR O VALOR EM DÓLAR
                $valor_dolar = $valor_real / $cotacao_dolar;

                // 8. FORMATAR OS NÚMEROS PARA EXIBIÇÃO
                $padrao_monetario = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
                $valor_real_formatado = numfmt_format_currency($padrao_monetario, $valor_real, "BRL");
                $valor_dolar_formatado = numfmt_format_currency($padrao_monetario, $valor_dolar, "USD");
                $cotacao_formatada = number_format($cotacao_dolar, 2, ',', '.');
                
                // 9. EXIBIR O RESULTADO FINAL
                echo "<p>Seus <strong>$valor_real_formatado</strong> equivalem a <strong>$valor_dolar_formatado</strong>.</p>";
                echo "<p><small>Cotação do dia: <strong>R$ $cotacao_formatada</strong> (Fonte: Banco Central do Brasil)</small></p>";
            }
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