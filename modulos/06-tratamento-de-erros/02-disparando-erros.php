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
 * Date: 11/03/17
 * Time: 01:35
 */

    $uso = '12345678908';
    $cpf = '';
    $cpf = '500';
    $cpf = $uso;
    $cpf = "abs";


    if (!$cpf):
        trigger_error("Informe o CPF", E_USER_NOTICE);
    elseif ($cpf == '500'):
        trigger_error("Formato nao e mais utilizado", E_USER_DEPRECATED);
    elseif ($cpf == $uso):
        trigger_error("CPF em uso", E_USER_WARNING);
    elseif (!preg_match('/ [0-9]*$/i', $cpf) && strlen($cpf) != 11):
        trigger_error("CPF Invalido", E_USER_ERROR);
    else:
        echo "CPF Valido";
    endif;
    echo ":)";


    function Erro($Erro, $Mensagem, $Arquivo, $Linha){
        $erro = ($Erro == E_USER_ERROR ? 'red' : ($Erro == E_USER_WARNING ? 'darkorange' : 'blue'));
        echo "<p style='color:{}'> <br>";
        echo "<small></small></p>";
    }
?>
</body>
</html>