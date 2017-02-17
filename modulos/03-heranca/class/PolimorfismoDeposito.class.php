<?php
/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 15/02/17
 * Time: 22:47
 */
class PolimorfismoDeposito extends Polimorfismo
{
    public $Desconto;

    public function __construct($Produto, $Valor)
    {
        parent::__construct($Produto, $Valor);
        $this->Desconto = 15;
        $this->Metodo = 'Deposito';
    }

    /**
     * @param int $Desconto
     */
    public function setDesconto($Desconto)
    {
        $this->Desconto = $Desconto;
    }

    public function Pagar()
    {
        $this->Valor = ($this->Valor / 100) * (100 - $this->Desconto);
        parent::Pagar();

    }

}