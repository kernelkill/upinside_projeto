
<?php
header('Content-Type: text/html; charset=utf-8');

//include './classes/MinhaClasse.php';
require './classes/MinhaClasse.class.php';
require './classes/MinhaSegundaClasse.class.php';

$Joabe = new MinhaSegundaClasse();


$Joabe->setNome('Joabe Kachorroski');
$Joabe->setEmpresa('Policia Federal');
$Joabe->setRamo('Analista de Sistemas');
$Joabe->setIdade(29);

var_dump($Joabe);

echo str_repeat("<br>", 40);
?>
