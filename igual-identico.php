<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Igual Identico</title>
</head>
<body>
    <div>
        <?php
        $a = 3;
        $b = "3";
        $r1 = ($a == $b)?"SIM":"NAO";
        $r2 = ($a === $b)?"SIM":"NAO";
        echo "As variaveis A e B são iguais? $r1";
        echo "<br/>As variaveis A e B são identicas? $r2";
        ?>
    </div>
</body>
</html>