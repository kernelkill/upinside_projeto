<?php

/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 15/02/17
 * Time: 22:50
 */
class PolimorfismoCartao extends Polimorfismo
{
    public $Juros;
    public $Encargos;
    public $Parcelas;
    public $NumParcelas;

    function __construct($Produto, $Valor)
    {
        parent::__construct($Produto, $Valor);
        $this->Juros = 1.17;
        $this->Metodo = 'Cartao de Cretido';
    }

    /**
     * @param float $Juros
     * para 5,5% tem que fazer 5.5
     */
    public function setJuros($Juros)
    {
        $this->Juros = $Juros;
    }

    /**
     * @param mixed $Encargos
     */
    public function setEncargos($Encargos)
    {
        $this->Encargos = ($this->Valor * ($this->Juros / 100));
    }

    /**
     * @param mixed $NumParcelas
     */
    public function setNumParcelas($NumParcelas)
    {
        $this->NumParcelas = $NumParcelas;
    }



}