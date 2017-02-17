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
    public $Parcela;
    public $NumParcelas;

    function __construct($Produto, $Valor)
    {
        parent::__construct($Produto, $Valor);
        $this->Juros = 1.17;
        $this->Metodo = 'Cartao de Cretido';
    }

    public function Pagar($Parcelas = null)
    {
        $this->setNumParcelas($Parcelas);
        $this->setEncargos();

        $this->Valor = $this->Valor + $this->Encargos;
        $this->Parcela = $this->Valor / $this->NumParcelas;

        echo "Voce pagou {$this->Real($this->Valor)} por um {$this->Produto}<br>";
        echo "<small>Pagamento efetuado via {$this->Metodo} em {$this->Parcela}x igauis de {$this->Real($this->Parcelas)}</small><hr>";

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
    public function setEncargos()
    {
        $this->Encargos = ($this->Valor * ($this->Juros / 100)) * $this->NumParcelas;
    }

    /**
     * @param mixed $NumParcelas
     */
    public function setNumParcelas($NumParcelas)
    {
        $this->NumParcelas = ( (int) $NumParcelas >= 1 ? $NumParcelas : 1 );
    }



}