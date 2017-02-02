<?php

header('Content-Type: text/html; charset=utf-8');

function checkDir($Dir){
    if (file_exists($Dir) && is_dir($Dir)):
        return true;
    else:
        return false;
    endif;
}


$getDir = getcwd();//Pega nome do diretorio atual
$setDir = "{$getDir}/04";
echo "{$getDir}<hr>";

if (!checkDir($setDir)):
    mkdir($setDir, 0777);
endif;

echo str_repeat("<br>", 40);
?>
