<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Interfaces - </title>
</head>
<body>
<?php
require_once ('./interface/IAluno.php');
require_once ('./inc/config.inc.php');

    $aluno = new TrabalhoComInterfaces('Joabe Kachorroski', 'Analise de Sistemas');
    $aluno->Formar();
    $aluno->Matricular('WS PHP');
    $aluno->Formar();

    var_dump($aluno);
?>
</body>
</html>