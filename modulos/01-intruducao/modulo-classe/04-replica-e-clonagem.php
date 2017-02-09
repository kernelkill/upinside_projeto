<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require './class/ReplicaClonagem.class.php';
        
        $readA = new ReplicaClonagem("posts", "categoria = 'noticias' ", 'ORDER BY DESC');
        $readA->Ler();
        
        var_dump($readA);
        ?>
    </body>
</html>
