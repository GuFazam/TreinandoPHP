<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador Unário</title>
</head>
<body>
    <div>
        <?php
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];
        $tipo = $_GET["op"]; //op de operação
        echo "Os valores passados foram $n1 e $n2 <br/>";
        $r = ($tipo == "s")?$n1+$n2:$n1*$n2; //s de soma, tecnicamente se for digitado s ele soma se for digitado qualquer ourra letra ele multiplica mas não é obrigatório o uso do s
        echo "<br/>O resultado será $r"; // r de resultado
        ?>
    </div>
</body>
</html>