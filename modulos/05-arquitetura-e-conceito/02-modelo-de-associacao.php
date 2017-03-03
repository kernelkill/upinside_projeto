<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Associação</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 02/03/17
 * Time: 00:50
 */

    require ('./inc/Config.inc.php');
    $cliente = new AssociacaoCliente("Joabe Kachorroski","joabe@server.com");
    $joabe = new AssociacaoLogin($cliente);

    if ($joabe->getLogin()):
        echo "Gerenciaando o cliente id: {$joabe->getCliente()->getCliente()}<br>";
        echo "{$joabe->getCliente()->getNome()} logou com sucesso usando o email {$joabe->getCliente()->getEmail()}";
    else:
    endif;


    var_dump($cliente, $joabe);
?>

</body>
</html>