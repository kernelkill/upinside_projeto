<?php

/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 28/02/17
 * Time: 02:23
 */
class AcessoPublico
{
    public $Nome;
    public $Email;

    /**
     * AcessoPublico constructor.
     * @param $Nome
     * @param $Email
     */
    public function __construct($Nome, $Email)
    {
        $this->Nome = $Nome;
        $this->setEmail($Email);
    }

    public function setEmail($Email)
    {
        if (!filter_var($Email,FILTER_VALIDATE_EMAIL)):
            die("Email invalido!");
        else:
            $this->Email = $Email;
        endif;
    }


}