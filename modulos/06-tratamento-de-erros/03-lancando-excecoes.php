<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lancando excessoes</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 11/03/17
 * Time: 14:48
 */
    
    $eu = null;

    if (!$eu):
        $a = new  Exception("Eu é NULL",E_USER_NOTICE);
    endif;

    echo $a->getMessage();
    
    var_dump($a);

    echo "<hr>";

    try{
        if (!$eu):
            throw new Exception("Eu novamente esta NULL", E_USER_NOTICE);
        endif;
    }catch(Exception $e){
        echo "<p>Erro #{$e->getCode()}:{$e->getMessage()}<br>";
        echo "<small>{$e->getFile()} na linha {$e->getLine()}</small></p>";

    }
?>
</body>
</html>
