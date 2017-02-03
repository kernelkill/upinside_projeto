
<?php
header('Content-Type: text/html; charset=utf-8');

$baseDir = getcwd() . "/05"; //Abre pasta atual
echo $baseDir; //mostra onde estamos
echo "<hr>";

//r = ler
//w = escrever
//a = anexar

$File = fopen("{$baseDir}/05.txt", 'w');//cria um novo arquivo dentro da pasta atual
$Txt = "Joabe Kachorros\r\nhttps://facebook.com/jkacto";//cria o texto
fwrite($File, $Txt);//escreve no arquivo oq foi inserido ali em cima
fclose($File);//fecha arquivo

$Add = "\r\nAdicionando conteudo adicional.";
$Filetrue = fopen("{$baseDir}/05.txt", 'a');
fwrite($Filetrue, $Add);
fclose($Filetrue);

$Fileread = fopen("{$baseDir}/05.txt", r);
while (!feof($Fileread)):
    $Dado = fgets($Fileread);
    echo "{$Dado}<br>";
endwhile;
fclose($Fileread);

//file_put_contents("{$baseDir}/05.txt", "Fazendo mais um teste");

$Content = "{$baseDir}/05.txt";
$Filecontent = file_get_contents($Content);
var_dump($Filecontent);

?>
