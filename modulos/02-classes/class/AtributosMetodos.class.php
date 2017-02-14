<?php

class AtributosMetodos {
    
    //Atributos
    var $Nome;
    var $Idade;
    var $Profissao;
    
    function setUsuario($Nome, $Idade, $Profissao){
        $this->Nome = $Nome;
        $this->setIdade($Idade);
        $this->Profissao = $Profissao;
    }
    
    function getUsuario(){
        return "{$this->Nome} tem {$this->Idade} anos de idade. E trabalha com {$this->Profissao}";
    }
    
    function getDebug(){
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }
    
    function setIdade($Idade){
        if (!is_int($Idade)):
            die('Idade informada e incorreta');
        else:
        $this->Idade = $Idade;
        endif;
    }
    
    function Envelhecer(){
        /* @var $Idadde type */
        $this->Idade = $this->Idade + 1;
    }
}
