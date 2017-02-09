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


        $readB = clone($readA);
        $readB->setTermos("categoria = 'redes sociais");



        $readC = clone ($readA);
        $readC->setTabela('Comentarios');
        $readC->setTermos("post = 25");

        $readA->Ler();
        $readB->Ler();
        $readC->Ler();

        var_dump($readA, $readB, $readC);
        ?>
    </body>
</html>
