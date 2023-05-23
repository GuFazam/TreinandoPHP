<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média</title>
</head>
<body>
    <div>
        <?php
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $nota3 = $_GET["n3"];
        $nota4 = $_GET["n4"];
        $media = ($nota1 + $nota2 + $nota3 + $nota4)/4;
        echo "A média entre $nota1, $nota2, $nota3 e $nota4 é $media <br/>";
        echo "O aluno está " . (($media<6)?"Reprovado":"Aprovado");
        ?>
    </div>
</body>
</html>