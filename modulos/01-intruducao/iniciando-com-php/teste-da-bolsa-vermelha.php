
<?php

header('Content-Type: text/html; charset=utf-8');


$Bolsa = "Preta";

if (!empty($Bolsa)):
    if ($Bolsa == "Preta"):
        echo "Bolsa comprada";
    elseif ($Bolsa == "Vermelha"):
        echo "Essa bolsa não foi escolhida";
    else:
        echo "Nao tem bolsa Marrom<br>";
        $Outra = true;
        if($Outra):
            echo "Essa bolsa pode.";
        else:
            echo "Essa nao pode.";
        endif;
    endif;
else:
    echo "Nenhuma bolsa foi comprada...";
endif;
?>