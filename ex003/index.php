<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        //$num = 0x1A;
        //echo "o valor da variável é $num";

        //$v = 300;
        //var_dump($v); //Mostra o valor e o tipo primitivo do valor.

        //$casado = false;
        //print "O valor para casado é $casado";

        //$vet = [6, 2.5, "Maria", 3, false]; //um vetor variavel
        //var_dump($vet);

        class Pessoa {
            private string $nome;
        }
        $p = new Pessoa;
        var_dump($p)
    ?>
</body>
</html>