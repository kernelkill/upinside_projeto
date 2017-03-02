<!doctype html>
<html lang="pt-BR">
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
 * Date: 01/03/17
 * Time: 00:37
 */
    require ('./inc/Config.inc.php');

    $cliente = new ObjetoDinamico;

    $joabe = new stdClass();
    $joabe->Nome = 'Joabe Kachorroski';
    $joabe->Email = 'joabe@server.com';

    var_dump($cliente, $joabe);

?>
</body>
</html>