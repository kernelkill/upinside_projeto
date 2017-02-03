
<?php
header('Content-Type: text/html; charset=utf-8');

$baseDir = getcwd() . "/05"; //Abre pasta atual
echo $baseDir; //mostra onde estamos
echo "<hr>";

//r = ler
//w = escrever
//a = anexar

$File = fopen("{$baseDir}/05.txt", 'w');//cria um novo arquivo dentro da pasta atual
$Txt = "Joabe Kachorros\r\nhttps://facebook.com/JKACTO";//cria o texto
fwrite($File, $Txt);//escreve no arquivo oq foi inserido ali em cima
fclose($File);//fecha arquivo

?>
