<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <head>
        <h1>Resultado do processamento</h1>
    </head>
    <main>
        <?php 
            $numero = $_GET["numero"] ?? "numero não informado";
            $numero = (int)$numero;
            echo "<p>O número escolhido foi, <strong> $numero <strong> <br>" .
            "seu antecessor é " . ($numero - 1) . " <br> 
             e seu sucessor é ". ($numero + 1) . "</p>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>