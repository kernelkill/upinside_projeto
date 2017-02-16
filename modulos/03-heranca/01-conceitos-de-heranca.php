<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Heranca PHP - Teste</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 15/02/17
 * Time: 21:22
 */


    require_once('./inc/config.inc.php');
    
    $pessoa = new Heranca('Joabe', 23);
    $pessoa->Formar('Pro PHP');
    $pessoa->Formar('WS');
    $pessoa->Envelhecer();
    $pessoa->VerPessoa();

    var_dump($pessoa);
?>

</body>
</html>

