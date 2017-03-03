<?php

/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 02/03/17
 * Time: 00:51
 */
class AssociacaoCliente
{
    private $Cliente;
    public $Nome;
    public  $Email;

    /**
     * AssociacaoCliente constructor.
     * @param $Cliente
     * @param $Nome
     * @param $Email
     */
    public function __construct($Nome, $Email)
    {
        $this->Cliente = md5($Nome);
        $this->Nome = $Nome;
        $this->Email = $Email;
    }

    /**
     * @return string
     */
    public function getCliente()
    {
        return $this->Cliente;
    }

}