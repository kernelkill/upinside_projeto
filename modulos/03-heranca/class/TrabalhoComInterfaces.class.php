<?php

/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 23/02/17
 * Time: 21:30
 */
class TrabalhoComInterfaces
{
    public $Aluno;
    public $Curso;
    public $Formacao;

    /**
     * TrabalhoComInterfaces constructor.
     * @param $Aluno
     * @param $Curso
     * @param $Formacao
     */
    public function __construct($Aluno, $Curso)
    {
        $this->Aluno = $Aluno;
        $this->Curso = $Curso;
        $this->Formacao = array();
    }


}