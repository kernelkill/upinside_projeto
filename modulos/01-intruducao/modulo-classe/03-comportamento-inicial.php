<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>WS - PHP Comportamento Inicial</title>
    </head>
    <body>
        <?php
        require './class/ComportamentoInicial.class.php';
        
        $joabe = new ComportamentoInicial;
        
        $joabe->ver();
        ?>
    </body>
</html>
