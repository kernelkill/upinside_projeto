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
        
        echo "<hr>";
        
        $pessoa->Idade = 'Banana';
        
        $pessoa->setUsuario('Joabe Kachorroski', 27, 'Web');
        $pessoa->setIdade(27);
        
        $pessoa->Envelhecer();
        $pessoa->Envelhecer();
        
        $pessoa->getDebug();
        ?>
    </body>
</html>
