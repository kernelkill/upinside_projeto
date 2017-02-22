<?php

/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 17/02/17
 * Time: 00:07
 */
 abstract class Abstracao
{
    public $Cliente;
    public $Conta;
    public $Saldo;

    /**
     * Abstracao constructor.
     * @param $Cliente
     * @param $Saldo
     */
    public function __construct($Cliente, $Saldo)
    {
        $this->Cliente = $Cliente;
        $this->Saldo = $Saldo;
    }

    public function Depositar($Valor)
    {
        $this->Saldo += (float) $Valor;
        echo "<spam style='color: green'><b> {$this->Conta}:</b> Deposito de {$this->Real($Valor)} efetuado com sucesso!</spam><br>";
    }

    public function Sacar($Valor)
    {
        $this->Saldo -= (float) $Valor;
        echo "<spam style='color: red'><b> {$this->Conta}:</b> Deposito de {$this->Real($Valor)} efetuado com sucesso!</spam><br>";
    }

    /** @param Abstracao $Destino */
    public function Transferir($Valor, $Destino)
    {
        if ($this === $Destino):
            echo "Voce nao pode tranferir";
        else:
            echo "<hr>";
            $this->Sacar($Valor);
            $Destino->Depositar($Valor);
            echo "<spam style='color:blue'><b> {$this->Conta}:</b> Tranferencia de {$this->Real($Valor)} efetuada com sucesso de {$this->Cliente} para {$Destino->Cliente}.</spam><br>";
        endif;
        
    }

    public function Extrato()
    {
        echo "<hr>Ola {$this->Cliente}. Seu saldo em {$this->Conta} e de {$this->Real($this->Saldo)}<hr>";

    }

    public function Real($Valor)
    {
        return "R$ " . number_format($Valor, '2', '.', ',');
    }

    abstract public function VerSaldo();


}