<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS - PHP Comportamento Inicial</title>
    </head>
    <body>
        <?php
        require './class/ComportamentoInicial.class.php';
        
//        $joabe = new ComportamentoInicial;
        
        $joabe = new ComportamentoInicial('Joabe', 27, 'Web', 2100);
        
        $joabe->ver();
        ?>
    </body>
</html>
