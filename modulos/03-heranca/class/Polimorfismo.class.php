<?php

/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 15/02/17
 * Time: 22:47
 */
class Polimorfismo
{
    public $Produto;
    public $Valor;
    public $Metodo;

    /**
     * Polimorfismo constructor.
     * @param $Produto
     * @param $Valor
     * @param $Metodo
     */
    public function __construct($Produto, $Valor)
    {
        $this->Produto = $Produto;
        $this->Valor = $Valor;
        $this->Metodo = 'Boleto';
    }

    public function Pagar()
    {
        echo "Voce Pagou {$this->Real($this->Valor)} por um {$this->Produto}<br>";
        echo "<small> Pagamento efetuado via {$this->Metodo}</small><br>";


    }

    public function Real($Valor)
    {
        return "R$". number_format($Valor,'2','.',',');
    }


}