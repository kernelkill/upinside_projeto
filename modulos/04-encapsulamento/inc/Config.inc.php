<?php
/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 28/02/17
 * Time: 02:23
 */
function __autoload($Class) {

    $dirName = 'class';

    if(file_exists("{$dirName}/{$Class}.class.php")):
        require_once("{$dirName}/{$Class}.class.php");
    else:
        die("Erro ao incluir {$dirName}/{$Class}.class.php<hr>");
    endif;
}
