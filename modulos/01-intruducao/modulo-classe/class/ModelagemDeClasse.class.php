<?php

/**
 * ModelagemDeClasse.class.php [TIPO]
 * Descricao
 * @copyright (c) year, Joabe G. Q. Kachorroski
 */
class ModelagemDeClasse {
    
    public $Nome;
    public $Idade;
    public $Profissao;
    public $ContaSalario;
    
    function __construct($Nome, $Idade, $Profissao, $ContaSalario) {
        $this->Nome = $Nome;
        $this->Idade = $Idade;
        $this->Profissao = $Profissao;
        $this->ContaSalario = $ContaSalario;
    }
    
    public function setNome($Nome) {
        $this->Nome = $Nome;
    }

    public function setIdade($Idade) {
        $this->Idade = $Idade;
    }

    public function setProfissao($Profissao) {
        $this->Profissao = $Profissao;
    }

    public function setContaSalario($ContaSalario) {
        $this->ContaSalario = $ContaSalario;
    }
    
    public function ToReal($Valor){
        return number_format($Valor,'2', '.', ',');
        
    }
    
    public function DarEcho($Mensagem){
        echo "<p>{$Mensagem}</p>";
    }
}
