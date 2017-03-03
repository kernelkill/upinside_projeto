<?php

/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 02/03/17
 * Time: 23:15
 */
class agregacaoProduto
{
    private $Produto;
    private $Nome;
    private $Valor;

    /**
     * agregacaoProduto constructor.
     * @param $Produto
     * @param $Nome
     * @param $Valor
     */
    public function __construct($Produto, $Nome, $Valor)
    {
        $this->Produto = $Produto;
        $this->Nome = $Nome;
        $this->Valor = $Valor;
    }

    /**
     * @return mixed
     */
    public function getProduto()
    {
        return $this->Produto;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->Nome;
    }

    /**
     * @return mixed
     */
    public function getValor()
    {
        return $this->Valor;
    }

}