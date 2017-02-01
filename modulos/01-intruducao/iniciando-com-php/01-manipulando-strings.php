<?php
header('Content-Type: text/html; charset=utf-8');

$nome = "joabe kachorroski <br>";

echo strtoupper($nome) ;
echo strtolower($nome);
echo ucwords($nome);

echo "<hr>";

$img = "NOME DA IMAGEM.jpg";

$imagem = strtolower(str_replace(' ', '-', $img));

echo $imagem;
echo "<br>";

for ($i = 1; $i <= 10; $i++):
    echo str_pad($i, 2, 0, STR_PAD_LEFT)."<br>";
endfor;

echo "<hr>";

$escreva = "Desculpa, ";
echo str_repeat($escreva, 100);

echo "<hr>";

$NovoNome = "Joaberson Guimaraes Kachorroski<br>";

echo substr($NovoNome, 0, 6);
echo "<br>";

echo substr($NovoNome, 0, strpos($NovoNome, ' '));
echo substr($NovoNome, strpos($NovoNome, ' '));

echo "<br>";

echo substr($NovoNome, 0, strpos($NovoNome, ' '));
echo substr($NovoNome, strripos($NovoNome, ' '));

?>
