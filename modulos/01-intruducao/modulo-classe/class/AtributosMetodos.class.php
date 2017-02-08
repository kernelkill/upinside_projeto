<?php

class AtributosMetodos {
    
    //Atributos
    var $Nome;
    var $Idade;
    var $Profissao;
    
    function setUsuario($Nome, $Idade, $Profissao){
        $this->Nome = $Nome;
        $this->Idade = $Idade;
        $this->Profissao = $Profissao;
    }
    
    function getUsuario(){
        return "{$this->Nome} tem {$this->Idade} anos de idade. E trabalha com {$this->Profissao}";
    }
}
