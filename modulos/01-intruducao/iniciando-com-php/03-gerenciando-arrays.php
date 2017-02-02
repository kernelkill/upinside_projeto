<?php
header('Content-Typ: text/html; charset=utf-8');

$Pessoa = [];
$Pessoa['nome'] = "Joabe Guimaraes Q. Kachorroski <script><?=";
$Pessoa = array_pad($Pessoa, 5, NULL); //Crio posiçoes nulas dentro do array

$Pessoa = array_filter($Pessoa);
$Pessoa = array_map('strip_tags', $Pessoa);//Trata erros de codigos;
$Pessoa = array_map('trim', $Pessoa); //Trata espaços vazios;

array_push($Pessoa, 29);//Adiciona novo indice
array_pop($Pessoa);//Remove indice
array_unshift($Pessoa, 29);//Adiciona indice no incio do array;
array_shift($Pessoa);


$Pessoa['idade'] = 25;
$Pessoa['job'] = 'Webmaster';
$Pessoa = array_reverse($Pessoa);//move indices de lugar;

$Empresa['empresa'] = "Wise Solutions ";
$Empresa['atuacao'] = "Consultoria em TI";

$Casa['cidade'] = "Campo Grande";

$Pessoa = array_merge($Pessoa, $Empresa, $Casa); //Uni varios arrays em um unico.
var_dump($Pessoa);

//$Pessoa = array_keys($Pessoa);

var_dump(array_keys($Pessoa)); //Pegando somente as chaves do array.

var_dump(array_values($Pessoa));//Pegando somente os valores do array.

var_dump(array_slice($Pessoa, 2,2));//Pegando posiçoes exata de uma array.

var_dump("O array tem ".count($Pessoa)." indices"); //contando quantos indices tem.
