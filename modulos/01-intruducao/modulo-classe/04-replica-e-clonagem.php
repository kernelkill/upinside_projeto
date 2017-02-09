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
        
        $readA->setTermos("categoria = 'internet'");
        $readA->Ler();
        
        $readB = $readA;
        $readB->setTermos("categoria = 'redes sociais");
        $readB->Ler();
        
        
        $readC = $readA;
        $readC->setTabela('Comentarios');
        $readC->setTermos("post = 25");
        $readC->Ler();
        
        var_dump($readA, $readB);
        ?>
    </body>
</html>
