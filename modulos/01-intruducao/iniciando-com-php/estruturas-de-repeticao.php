<?php

/**
 * estruturas-de-repeticao [TIPO]
 * Descricao
 * @copyright (c) year, Joabe G. Q. Kachorroski
 */

header('Content: text/html; charset=utf-8');

$i = 1;


//WHILE
while ($i <= 10):
    echo "{$i} X 8  = " . $i * 8 . "<br>";
    $i ++;
endwhile;

echo "<hr>";


//FOR
for ($e=1; $e<=10; $e++):
    echo "{$e} X 10  = " . $e * 10 . "<br>";
endfor;

echo "<hr>";

$array = ['WS PHP', 'WS HTML', 'WS PP', 'WS DD'];

foreach ($array as $cursos) {
    echo "Eu tenho os seguintes modulos na minha grade {$cursos} <br>";
}

echo "<hr>";

$arr = ['Nome' => 'Joabe Kachorroski', 'Idade' => 29, 'Profissao' => 'Pedreiro' ];
foreach ($arr as $key => $value) {
    echo "{$key} = {$value} <br>";
}