<?php

header('Content-Type: text/html; charset=utf-8');

//Função que verifica se a pasta existe
function checkDir($Dir){
    if (file_exists($Dir) && is_dir($Dir)):
        return true;
    else:
        return false;
    endif;
}


$getDir = getcwd();//Pega nome do diretorio atual
$setDir = "{$getDir}/04"; //Aqui eu estou setando o nome da minha pasta dentro do diretorio atual
echo "{$getDir}<hr>";

//if (!checkDir($setDir)):
//    mkdir($setDir, 0777);
//endif;


//if(checkDir($setDir)):
//    rmdir($setDir);    
//endif;

//if (checkDir($setDir)):
//    rename($setDir, "{$getDir}/uploads");
//    echo "Renomeado com sucesso...";
//else:
//    echo "Pasta nao existe...";
//endif;

//rename("{$getDir}/05", "{$setDir}/05");

chdir($setDir);//entrando dentro do diretorio atual que no caso e o 04
echo getcwd();//mostrando diretorio atual
echo "<hr>";

$newDir = getcwd();
$openDir = opendir($newDir);



echo str_repeat("<br>", 40);
?>
