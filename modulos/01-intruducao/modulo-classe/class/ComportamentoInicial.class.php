<?php

class ComportamentoInicial {
    
    var $Nome;
    var $Idade;
    var $Profissao;
    var $Salario;
    
    function ver(){
        echo "<pre>";
        print_r($this);
        echo "</pre>";
    }
}
