<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agregaçao...</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 02/03/17
 * Time: 23:14
 */

    require ('./inc/Config.inc.php');

    $joabe = new AssociacaoCliente('Joabe Kachorroski','joabe@server.com');
    
    $pro = new agregacaoProduto('20','ProPHP',334.90);
    $wsphp = new agregacaoProduto('21','WS PHP',289.90);
    $wshtml = new agregacaoProduto('22','WS HTML',289.90);

    $outrocurso = new stdClass();
    $outrocurso->Produto = '23';
    $outrocurso->Nome = 'Curso JQuery';
    $outrocurso->Valor = 400;

    $carrinho = new agregacaoCarrinho($joabe);
    $carrinho->Add($pro);
    $carrinho->Add($wshtml);
    $carrinho->Add($wsphp);

    $carrinho->Remove($wshtml);


    var_dump($carrinho);
    echo "<hr>";
    var_dump($joabe, $pro, $outrocurso);
?>
</body>
</html>