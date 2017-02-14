<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            require('./class/ClassesObjeto.class.php');
            
            $teste = new ClassesObjeto();
            $teste->getClass('De introduçao', 'mostrar uma classe.');
            
            $teste->Classe = 'Classe 02';
            $teste->Funcao = 'Recebe uma funcao';
            
            $teste->verClass();
        ?>
    </body>
</html>
