
<?php
// put your code here

header('Content: text/html; charset=utf-8');

$teste = false;

if ($teste):
    echo "Teste Verdadeiro";
else:
    echo "Teste Falso";
endif;

echo "<hr>";

$test = true;
$result = "";

if ($test && !empty($result)):
    echo "Teste positivo: {$result}";
elseif ($test || empty($result)) :
    echo "Teste positivo, porem sem resultado.";
else:
    echo "Desconhecido...";
endif;

?>