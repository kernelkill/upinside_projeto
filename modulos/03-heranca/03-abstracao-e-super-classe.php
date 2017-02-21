<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abstração</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 17/02/17
 * Time: 00:07
 */ 
    require_once ('./inc/config.inc.php');
    
    $conta = new Abstracao('Joabe Kachorroski', 500);
    $conta->Depositar(1000);
    $conta->Sacar(500);

    var_dump($conta);

?>

</body>
</html>