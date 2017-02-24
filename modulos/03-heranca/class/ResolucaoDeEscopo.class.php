<?php

/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 23/02/17
 * Time: 21:49
 */
class ResolucaoDeEscopo
{
    public $Produto;
    public $Valor;
    public static $Vendas;
    public static $Lucros;

    /**
     * ResolucaoDeEscopo constructor.
     * @param $Produto
     * @param $valor
     */
    function __construct($Produto, $Valor) {
        $this->Produto = $Produto;
        $this->Valor = $Valor;
    }

    public function Vender() {
        self::$Vendas += 1;
        self::$Lucros = $this->Valor * self::$Vendas;
        echo "{$this->Produto} vendido por R$ {$this->Valor}<br>";
    }

    public static function Relatorio() {
        echo "<hr>";
        echo "Este produto vendeu " . self::$Vendas . " unidade(s). Total R$ " . self::$Lucros;
        echo "<hr>";
    }


}