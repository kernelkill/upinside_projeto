<?php
header('Content-Typ: text/html; charset=utf-8');

$Pessoa = [];
$Pessoa['nome'] = "Joabe Guimaraes Q. Kachorroski <script><?=";
$Pessoa = array_pad($Pessoa, 5, NULL); //Crio posiçoes nulas dentro do array

$Pessoa = array_filter($Pessoa);
$Pessoa = array_map('strip_tags', $Pessoa);
$Pessoa = array_map('trim', $Pessoa);

array_push($Pessoa, 29);
array_pop($Pessoa);
array_unshift($Pessoa, 29);
array_shift($Pessoa);


$Pessoa['idade'] = 25;
$Pessoa['job'] = 'Webmaster';


var_dump($Pessoa);