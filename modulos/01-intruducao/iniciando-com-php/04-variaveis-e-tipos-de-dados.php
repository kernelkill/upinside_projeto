<?php

//Convertendo documento para HTML
header('Content-Type: text/html; charset=utf-8');

//STR  = string
$str = "Olá Mundo!";
var_dump($str);

//ARR = array
$array = array();
$array[] = "Joabe";
$array[] = 26;
var_dump($array);

//BOL = boleano
$bol = TRUE;
var_dump($bol);
//if($bol):
//    echo "Verdadeiro";
//else:
//    echo "Falso";
//endif;

$idade = 26;
$velho = ($idade >= 40);
var_dump($velho);

$obj = new stdClass();
$obj -> Nome = "Joabe";
$obj -> Idade = 26;
var_dump($obj);