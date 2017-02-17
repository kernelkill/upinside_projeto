<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 15/02/17
 * Time: 22:48
 */
    
    require_once('./inc/config.inc.php');
    
    $boleto = new Polimorfismo('Garrafa','50');
    $boleto->Pagar();

    var_dump($boleto);
    echo "<hr>";

    $deposito = new PolimorfismoDeposito('Garrafa','50');
    $deposito->Pagar();
    
    var_dump($deposito);

    $cartao = new PolimorfismoCartao('Garrafa', '50');
   $cartao->Pagar();

    var_dump($cartao);


?>

</body>
</html>