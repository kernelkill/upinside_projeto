<?php

/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 21/02/17
 * Time: 22:14
 */
class AbstracaoCP extends AbstracaoCC
{
    public $Rendimento;

    function __construct($Cliente, $Saldo)
    {
        parent::__construct($Cliente, $Saldo, 0);
        $this->Conta = 'Conta Poupança';
        $this->Rendimento = 1.7;
    }

    final public function Depositar($Valor)
    {
        $Juro = $Valor * ($this->Rendimento / 100);
        $Deposito = $Valor + $Juro;
        parent::Depositar($Deposito);
        echo "<small style='color: #0099ff'> Valor de Deposito: {$this->Real($Valor)} || Redimentos: {$this->Real($Juro)}</small><hr>";

    }

    public function VerSaldo()
    {
        // TODO: Implement VerSaldo() method.
        parent::Extrato();
    }
}