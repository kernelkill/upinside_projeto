
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
var_dump(get_class_methods($Joabe));
var_dump(get_class_vars('MinhaSegundaClasse'));
var_dump(get_class($Joabe));
var_dump(get_parent_class($Joabe));
var_dump(is_subclass_of($Joabe, 'MinhaClasse'));
var_dump(method_exists($Joabe, 'getNome'));
var_dump(call_user_func('strtoupper',$Joabe->Nome));
var_dump(call_user_func(array($Joabe, 'getIdade')));

echo str_repeat("<br>", 40);
?>
