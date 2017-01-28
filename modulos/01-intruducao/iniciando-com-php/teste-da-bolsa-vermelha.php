
<?php
header('Content-Type: text/html; charset=utf-8');


$Bolsa = "Vermelha";

if (!empty($Bolsa)):
    if ($Bolsa == "Preta"):
        echo "Bolsa omprada";
    elseif($Bolsa == "Vermelha"):
        echo "Essa bolsa não foi escolhida";
    endif;
else:
    echo "Nenhuma bolsa foi comprada...";
endif;

?>