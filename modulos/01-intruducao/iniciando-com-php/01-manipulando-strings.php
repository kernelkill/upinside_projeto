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
?>
