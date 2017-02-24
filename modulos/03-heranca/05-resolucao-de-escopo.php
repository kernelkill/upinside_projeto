<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Resolucao de Escopo </title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 23/02/17
 * Time: 21:48
 */
    require_once ('./inc/config.inc.php');
    
    $produto = new  ResolucaoDeEscopo('Livro de Web Designer', 90.50);
    $produto->Vender();
    $produto->Vender();

    //$produto->Relatorio();
    ResolucaoDeEscopo::Relatorio();

    var_dump($produto);

?>

</body>
</html>
