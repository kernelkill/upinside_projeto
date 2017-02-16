<?php

/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 15/02/17
 * Time: 22:06
 */
class HerancaJuridica extends Heranca
{
    public $Empresa;
    public $Funcionarios;

    function __construct($Nome, $Idade, $Empresa)
    {
        parent::__construct($Nome, $Idade);
        $this->Empresa = $Empresa;
    }

    public function Contratar($Pessoa)
    {
        echo "A empresa {$this->Empresa} de {$this->Nome} contratou {$Pessoa}<hr>";
        $this->Funcionarios += 1;
    }

    public function VerEmpresa()
    {
        echo "{} foi fundada por {} <br><small style='color:#09f;'>";
        parent::VerPessoa();
        echo "</small>";
    }
}