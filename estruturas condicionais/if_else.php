<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura Condicional if</title>
</head>
<body>
    <div>
        <form method="post">
            <label>Ano de Nascimento:</label>
            <input type="number" placeholder="4 digitos" name="ano">
            <button type="submit">Verificar</button>
        </form>
    </div>

    <?php
    $ano = isset($_POST["ano"]) ? $_POST["ano"] : 1900;
    $idade = date("Y") - $ano; // date no caso é data atual e o "Y" é para exibir o ano com 4 digitos
    echo "você nasceu em $ano e tem $idade anos <br>";

    if ($idade >= 18) {
        $votar = "já pode votar";
        $dirigir = "já pode dirigir";
    } 
    else {
        $votar = "nao pode votar";
        $dirigir = "nao pode dirigir";
    }
    echo "Com essa idade você $votar e também $dirigir <br>";

    // if ($idade < 16) {
    //     $tipoVoto = "não vota";
    // } 
    // else {
    //     if (($idade >= 16 && $idade < 18) || ($idade>65)){
    //         $tipoVoto = "voto opcional";
    //     } 
    //     else {
    //         $tipoVoto = "voto obrigatório";
    //     }
    // }
    // echo "para essa idade, $tipoVoto";

    if ($idade < 16) {
        $tipoVoto = "não vota";
    } 
    else if (($idade >= 16 && $idade < 18) || ($idade>65)){
            $tipoVoto = "voto opcional";
        } 
        else {
            $tipoVoto = "voto obrigatório";
        }
    
    echo "para essa idade, $tipoVoto";
    ?>
</body>
</html>