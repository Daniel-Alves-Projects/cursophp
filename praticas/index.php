<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenação de Strings</title>
</head>
<body>
    <?php 
        //echo "PHP \u{1F418}"; //aspas duplas enterpretam possiveis códigos como no exemplo um emoji de elephant (double quoted)
        //echo 'PHP \u{1F418}'; //aspas simples somente mostram os caracteres da string (single quoted)

        //$nome = "Daniel";
        //echo "Ola $nome";
        //echo 'Ola $nome';

        //const ESTADO = "RJ";
        //echo "Moro no " .ESTADO;  //interpolação com constantes precisa utilizar o . (ponto) para concatenação com strings.
        //echo "Estamos no ano de " . date('Y');
        //$nome = "Rodrigo";
        //$snome = "Nogueira";
        //echo "$nome Minotauro $snome";

        $nome = "Gustavo";
        $sobrenome = "Guanabara";
        $apelido = "Gafanhoto";
        echo "$nome \t \"$apelido\" \t $sobrenome";  //As barras fazem com que as aspas duplas apareçam na tela. \t faz tabulação ou espaço tab.
    ?>
</body>
</html>
