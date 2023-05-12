<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Aritmeticas</title>
    <style>
        h2 {
            font: 15pt Arial;
            color: #171559;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div>
        <?php
        $valor1 = $_GET["x"];
        $valor2 = $_GET["y"];
        echo "<h2>Valores recebidos: $valor1 e $valor2</h2>";
        echo "O valor absoluto de $valor2 é " . abs($valor2);//o valor absoluto é basicamente eliminar o sinal negativo e considerar apenas o valor
        echo "<br/>O valor de $valor1<sup>$valor2</sup> é " . pow($valor1, $valor2);//pow é potenciação
        echo "<br/>A raiz de $valor1 é " . sqrt($valor1);//sqrt serve para fazer a raiz quadrada
        echo "<br/>O valor de $valor2 arredondado é " . round($valor2);//arredonda valores quebrados para valores inteiros ex: 3.2 para 3, também pode-se usar ceil(arredonda para cima) ou floor(arredonda para baixo) ao invés do round
        echo "</br>A parte inteira de $valor2 é " . intval($valor2);//intavl pega apenas a parte inteira do valor
        echo "<br/>O valor de $valor1 em moeda é R$". number_format($valor1, 2, ",", ".");//ele formata o valor em moeda o 2 representa as casas decimais após a virgula o outro ponto e a virgula é para valores grandes ex: 8.000,00
        ?>
    </div>
</body>
</html>