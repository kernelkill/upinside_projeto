<?php

/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 09/02/17
 * Time: 21:44
 */
 /**
 * @param <b>DocumentacaoDeClasse:</b>*/
 /**
 * @param Essa classe foi criada para craiaçao de documentaçao
 */
class DocumentacaoDeClasse
{
    /**
     * @var
     */
    public $Empresa;
    /**
     * @var int
     */
    public $Setores;

    /**@var InteracaoClasse **/
    public $Funcionario;

    /**
     * DocumentacaoDeClasse constructor.
     * @param $Empresa
     */
    public function __construct($Empresa)
    {
        $this->Empresa = $Empresa;
        $this->Setores = 0;
    }

    /**
     * @param $Funcionario
     * @param $Cargo
     * @param $Salario
     */
    public function Contratar($Funcionario, $Cargo, $Salario)
    {
        $this->Funcionario = (object)$Funcionario;
        $this->Funcionario->Trabalhar($this->Empresa,$Salario,$Cargo);
        $this->Setores += 1;

    }

    /**
     *
     */
    public function Pagar()
    {
        $this->Funcionario->Receber($this->Funcionario->Salario);

    }

    /**
     * @param $Cargo
     * @param null $Salario
     */
    public function Promover($Cargo, $Salario = null)
    {
        $this->Funcionario->Profissao = $Cargo;
        if ($Salario):
            $this->Funcionario->Salario = $Salario;
        endif;
    }

    /**
     * @param $Funcionario
     */
    public function Funcionarios($Funcionario) {
        $this->Funcionario = (object) $Funcionario;
    }


    /**
     * @param $Funcionario
     * @param $Recisao
     */
    public function Demitir($Funcionario, $Recisao)
    {
        $this->Funcionario->Receber($Recisao);
        $this->Funcionario->Empresa = null;
        $this->Funcionario->Salario = null;
        $this->Setores -= 1;

    }


}