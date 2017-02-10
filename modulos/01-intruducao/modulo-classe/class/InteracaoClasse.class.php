<?php

/**
 * ModelagemDeClasse.class.php [TIPO]
 * Descricao
 * @copyright (c) year, Joabe G. Q. Kachorroski
 */
class InteracaoClasse {
    
    public $Nome;
    public $Idade;
    public $Profissao;
    public $Empresa;
    public $Salario;
    public $ContaSalario;
    
    function __construct($Nome, $Idade, $Profissao, $ContaSalario) {
        $this->Nome = $Nome;
        $this->Idade = $Idade;
        $this->Profissao = $Profissao;
        $this->ContaSalario = $ContaSalario;
    }
    
    public function Trabalhar($Empresa, $Salario, $Profissao){
        $this->Empresa = $Empresa;
        $this->Salario = $Salario;
        $this->Profissao = $Profissao;

    }
    
    public function ToReal($Valor){
        return number_format($Valor,'2', '.', ',');
        
    }
    
    public function DarEcho($Mensagem){
        echo "<p>{$Mensagem}</p>";
    }
}
