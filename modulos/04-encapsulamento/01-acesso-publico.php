<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Acesso Protegido</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 28/02/17
 * Time: 02:23
 */

    require ('./inc/Config.inc.php');

    $joabe = new AcessoPublico('Joabe Kachorroski', 'Campus@upinsede.com');
    $joabe->Nome = 'Kachorroski';
    $joabe->Email = 'kachorroski@gmail.com';

    var_dump($joabe);
?>

</body>
</html>