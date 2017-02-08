<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require './class/AtributosMetodos.class.php';
        
        $pessoa = new AtributosMetodos();//instancio o objeto
        
        $pessoa->setUsuario('Joabe Kachorroski', 27, 'WebMaster');
        $usuario = $pessoa->getUsuario($pessoa);
        echo $usuario;
        ?>
    </body>
</html>
