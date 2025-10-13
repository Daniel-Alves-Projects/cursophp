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
        <h1>Trabalhando com números aleatórios</h1>
    </head>
    <main>
        <?php 
            $numero = rand(1,100);
            echo "<p>Gerando um número aleatório entre 0 e 100... <strong> O valor gerado foi $numero!<strong></p>"
        ?>
        <form>
        <input type="submit" value="&#128259 Gerar Outro"></input>
        </form>

        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>