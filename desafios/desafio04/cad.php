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
        <h1>Analisador de Número Real</h1>
    </header>
    <main>
        <?php
            $valor = $_GET['valor'] ?? 0;
            $valor_inteiro = (int) $valor;
            $fracao = $valor - $valor_inteiro;
            echo "<p> Analisando o valor $valor informado pelo usuario 
            A parte inteira do número é $valor_inteiro </p>";
            echo "<p> A parte fracionada do número é " . number_format($fracao, 3, ',', '.') . "</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>