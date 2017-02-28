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
 * Date: 28/02/17
 * Time: 17:15
 */

    require ('./inc/Config.inc.php');
    
    $joao = new AcessoProtegido('Joao Antonio', 'joaoantonio@server.com');
    
    $joao->Nome = 'Manuel Silva';
    //$joao->Email = 'manuelsilva@server.com';
    $joao->setEmail('manuelsilva@server.com');

    var_dump($joao);
?>
</body>
</html>