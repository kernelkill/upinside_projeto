<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Interação de Objetos</title>
</head>
<body>

<?php
    require('class/InteracaoClasse.class.php');
    require('class/InteracaoDeObjetos.php');

    $joabe = new InteracaoClasse('Joabe G. Kachorroski', 29, 'Webmaster', 1500);
    $marcos = new InteracaoClasse('Marcos', 22, 'Web Design', 500);
    
    $empresa = new InsercaoDeObjetos('Policia Federal');
    $empresa->Contratar($joabe,'Perito Criminal',12000);
    $empresa->Pagar();
    $empresa->Promover('Chefe de Setor', 15000);
    $empresa->Pagar();

    $empresa->Contratar($marcos,'Perito Balistico', 8900);
    $empresa->Pagar();
    $empresa->Promover('Chefe Balistica',1100);
    $empresa->Pagar();

    var_dump($joabe, $marcos ,$empresa);
 

?>
</body>
</html>