<?php

/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 01/03/17
 * Time: 00:36
 */
class ObjetoDinamico
{
    public $Nome;
    public $Email;


    public function Novo($Cliente)
    {
        if (is_object($Cliente)):
            $this->Nome = $Cliente->Nome;
            $this->Email = $Cliente->Email;
        else:
            die('Erro, informe um objeto com nome e email.');
        endif;
    }

}