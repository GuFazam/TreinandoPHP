<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <?php
        $nome = "Gustavo";
        $idade = 18;
        echo "$nome tem $idade anos! <br>"; //nesse tipo de concatenação é obrigatório o uso de aspas duplas ""
        //echo $nome . " tem " . $idade . " anos!"; //também se pode usar o ponto . para concatenar
        //também se pode usar tags html como exemplo o <br> dentro do php

        $n1 = 3;
        $n2 = 2;
        $soma = $n1 + $n2;
        echo "A soma entre $n1 e $n2 é igual $soma";
        ?>
    </div>
</body>

</html>