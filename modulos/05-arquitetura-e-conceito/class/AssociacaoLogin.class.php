<?php

/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 02/03/17
 * Time: 00:51
 */
class AssociacaoLogin
{
    /** @var AssociacaoCliente */
    public $Cliente;
    private $Login;

    /**
     * AssociacaoLogin constructor.
     * @param $Cliente
     * @param $Login
     */
    public function __construct($Cliente)
    {
        if (is_object($Cliente)):
            $this->Cliente = $Cliente;
            $this->Login = true;
        else:
            die('Erro ao logar!');
        endif;
    }

    /**
     * @return boolean
     */
    public function getLogin()
    {
        return $this->Login;
    }




}