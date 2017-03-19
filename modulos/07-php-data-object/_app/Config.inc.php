<?php
/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 19/03/17
 * Time: 17:10
 */

//CONFIGURAÇOES DO SITE. #############
define('HOST','localhost');
define('USER','root');
define('PASS','root');
define('DBSA','wsphp');

//AUTO LOAD DE CLASSES. #############

function __autoload($Class) {

    $dirName = 'class';

    if(file_exists("{$dirName}/{$Class}.class.php")):
        require_once("{$dirName}/{$Class}.class.php");
    else:
        die("Erro ao incluir {$dirName}/{$Class}.class.php<hr>");
    endif;
}

//TRATAMENTO DE ERROS. #############
//CSS constantes :: Mensagens de Erro.

define('WS_ACCEPT','accept');
define('WS_INFOR','infor');
define('WS_ALERT','alert');
define('WS_ERROR','error');

//WSError :: Exibe erros lançados; :: Font
    function WSErro($ErrMsg, $ErrNo, $ErrDie = null){
        $CssClass = ($ErrNo == E_USER_NOTICE ? WS_INFOR : ($ErrNo == E_USER_WARNING ? WS_ALERT : ($ErrNo == E_USER_ERROR ? WS_ERROR : $ErrNo)));
        echo "<p class=\"trigger {$CssClass}\">{$ErrMsg}<span class=\"ajax_close\"></span></p>";

        if ($ErrDie):
            die;
        endif;

    }

//PHPErro :: personaliza gatilho do PHP
    function PHPErro($ErrNo, $ErrMsg, $ErrFile, $ErrLine){
        $CssClass = ($ErrNo == E_USER_NOTICE ? WS_INFOR : ($ErrNo == E_USER_WARNING ? WS_ALERT : ($ErrNo == E_USER_ERROR ? WS_ERROR : $ErrNo)));
        echo "<p class=\"trigger {$CssClass}\">";
        echo "<b>Erro na Linha: #{$ErrLine} ::</b> {$ErrMsg}<br>";
        echo "<small>{$ErrFile}</small>";
        echo "<span class=\"ajax_close\"></span></p>";

        if ($ErrNo == E_USER_ERROR):
            die;
        endif;
    }


set_error_handler('PHPErro');