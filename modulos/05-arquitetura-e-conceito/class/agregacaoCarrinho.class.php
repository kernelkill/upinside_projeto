<?php

/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 02/03/17
 * Time: 23:15
 */
class agregacaoCarrinho
{
    private $Cliente;
    private $Produtos;
    private $Total;

    /**
     * agregacaoCarrinho constructor.
     * @param $Cliente
     */
    public function __construct(AssociacaoCliente $Cliente)
    {
        $this->Cliente = $Cliente;
        $this->Produtos = array();
    }

    public function Add(agregacaoProduto $Produto)
    {
        $this->Produtos[$Produto->getProduto()] = $Produto;
        $this->Total += $Produto->getValor();
        $this->VerCarrinho($Produto, 'Adicionou');
    }

    public function Remove(agregacaoProduto $Produto)
    {
        unset($this->Produtos[$Produto->getProduto()]);
        $this->Total -= $Produto->getValor();
        $this->VerCarrinho($Produto, 'Removeu');
        
    }

    public function VerCarrinho(agregacaoProduto $Produto, $Action)
    {
        echo "Voce {$Action} um  {$Produto->getNome()} em seu carrinho. Valor R$ {$this->Total}<hr>";
    }


}