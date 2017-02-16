<?php
/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 13/02/17
 * Time: 23:33
 */

function __autoload($Class)
{
    $dirName = 'class';

    if (file_exists("{$dirName}/{$Class}.class.php")):
        require_once("{$dirName}/{$Class}.class.php");
    else:
        die("Sem arquivo");
    endif;
}