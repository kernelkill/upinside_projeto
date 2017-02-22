<?php

/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 21/02/17
 * Time: 22:05
 */
class AbstracaoCC extends Abstracao
{
    public $Limite;

    function __construct($Cliente, $Saldo, $Limite)
    {
        parent::__construct($Cliente, $Saldo);
        $this->Conta = 'Conta Corrente';
        $this->Limite = (float) $Limite;
    }


    public function VerSaldo()
    {
        // TODO: Implement VerSaldo() method.
        parent::Extrato();
    }
}