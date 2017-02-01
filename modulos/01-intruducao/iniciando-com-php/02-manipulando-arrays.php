<?php
header('Content-Type: text/html; charset=utf-8');

$arr = array('PHP','HTML', 'CSS');
$arr[] = 'JS';
var_dump($arr);


$arrB = ['PHP','HTML', 'CSS'];
$arrB[] = 'Ruby';

var_dump($arrB);

foreach ($arrB as $lang):
    echo "{$lang}<br>";
endforeach;
echo "<br>";

//Associativo
$arrC = [
    "carro" => "Programador",
    "salario" => 1200
];

$arrC['empresa'] = 'Wise';
$arrC['salario'] += 5000;
$arrC['cargo'] = 'Webmaster';

var_dump($arrC);
//echo "Eu sou {$arrC['cargo']}, na empresa {$arrC['empresa']}";

extract($arrC);
echo "Eu sou {$cargo} na empresa {$empresa} e ganho R$ ". number_format($salario, 2,',','.')." por mês";
echo "<hr>";

//Multidimenssional
$Colaboradores = [];
$Colaboradores[] = ["nome" => "Joabe Kachorroski", "Salario" => 7200, "cargo" => "Webmaster"];
$Colaboradores[] = ["nome" => "Jonatas Kachorroski", "Salario" => 1200, "cargo" => "aprendiz"];
$Colaboradores[] = ["nome" => "João Kachorroski", "Salario" => 1200, "cargo" => "aprendiz"];

foreach ($Colaboradores as $Cargo):
    extract($Cargo);
    echo "{$nome} e {$cargo} e recebe ". number_format($Salario, 2,',','.')." por mês<br>";
endforeach;

var_dump($Colaboradores);


echo str_repeat("<br>", 40);