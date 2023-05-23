<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eleição</title>
</head>
<body>
    <div>
        <?php
        $ano = $_GET["ano"];
        $idade = 2023- $ano;
        echo "quem nasceu em $ano tem $idade anos, " . (($idade>=18 && $idade<65)?"é obrigatório":"não é obrigatório") . " votar"; // && significa and(e)
        ?>
    </div>
</body>
</html>