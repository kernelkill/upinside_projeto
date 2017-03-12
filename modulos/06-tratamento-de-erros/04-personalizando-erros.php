<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/reset.css">
    <title>Personalizando erros</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 11/03/17
 * Time: 15:14
 */

    require ('./_app/Config.inc.php');

    trigger_error('Essa é uma NOTICIA', E_USER_NOTICE);
    trigger_error('Esse é um ALERTA', E_USER_WARNING);
    //trigger_error("Esse é um ERRO!", E_USER_ERROR);

    PHPErro(WS_ERROR, "Esse é um ERRO personalizado!", __FILE__, __LINE__);
    WSErro("Esse é um ACCEPT!", WS_ACCEPT);

try {

    throw new Exception("Essa é uma Exessão!", E_USER_WARNING);
} catch (Exception $e) {

    PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
    WSErro($e->getMessage(), $e->getCode());
    WSErro($e->getMessage(), WS_ACCEPT);
}
    
?>
</body>
</html>