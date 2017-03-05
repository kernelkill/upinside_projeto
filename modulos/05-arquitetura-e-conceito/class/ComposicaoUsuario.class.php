<?php

/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 05/03/17
 * Time: 02:32
 */
class ComposicaoUsuario
{
    private $Nome;
    private $Email;
    private $Endereco;

    /**
     * ComposicaoUsuario constructor.
     * @param $Nome
     * @param $Email
     */
    public function __construct($Nome, $Email)
    {
        $this->Nome = $Nome;
        $this->Email = $Email;
    }

    public function CadastrarEndereco($Cidade, $Estado)
    {
        $this->Endereco = new ComposicaoEndereco($Cidade, $Estado);
    }

    /** @return ComposicaoEndereco */
    public function getEndereco()
    {
        return $this->Endereco;
        
    }


}