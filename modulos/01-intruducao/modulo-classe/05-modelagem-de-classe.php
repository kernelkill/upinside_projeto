<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            
            require './class/ModelagemDeClasse.class.php';
            
            $joabe = new ModelagemDeClasse('Joabe', 27, 'Developer', 5250);
            
            $joabe->Trabalhar('um portal', 5000);
            
            var_dump($joabe);
            
        ?>
    </body>
</html>
