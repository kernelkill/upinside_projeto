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

   final public function Sacar($Valor)
    {
        if ($this->Saldo  + $this->Limite >= (float) $Valor):
            parent::Sacar($Valor);
        else:
            echo "<spam style='color: green'><b> {$this->Conta}:</b> Erro ao sacar {$this->Real($Valor)} voce nao tem esse valor!</spam><br>";
        endif;
        
    }

    /** @param Abstracao $Destino*/
    final public function Transferir($Valor, $Destino)
    {
        if ($this->Saldo + $this->Limite >= (float) $Valor):
            parent::Transferir($Valor, $Destino);
        else:
            echo "<spam style='color: green'><b> {$this->Conta}:</b> Erro ao tranferir {$this->Real($Valor)} voce nao tem esse valor!</spam><br>";
        endif;
    }


    public function VerSaldo()
    {
        // TODO: Implement VerSaldo() method.
        parent::Extrato();
    }
}