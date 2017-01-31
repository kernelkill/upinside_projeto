<?php

header('Content-Type: text/html; charset=utf-8');

$idade = 24;

if (!empty($idade)):
    if ($idade == 25):
        echo "Voce é maior de 21 anos, ENTRE!";
    elseif($idade <= 18):
        echo "Voce nao pode entrar sem documento.";
    else:
        echo "Infelizmente nao pode entrar sem os pais.<br>";
        $pai = true;
        if ($pai):
            echo "Espere estou chegando.";
        else:
            echo "entao volte pra casa.";
        endif;
    endif;
else:
    echo "Saia do Bar.";
endif;
?>
