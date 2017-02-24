<?php

/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 23/02/17
 * Time: 21:30
 */
class TrabalhoComInterfaces implements IAluno
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


    public function Matricular($Curso)
    {
        // TODO: Implement Matricular() method.
        $this->Curso = $Curso;
        echo "{$this->Aluno} foi matriculado no curso {$this->Curso}<br>";
    }

    public function Formar()
    {
        // TODO: Implement Formar() method.
        $this->Formacao[] = $this->Curso;
        echo "{$this->Aluno} formou-se no curso {$this->Curso}<br>";
    }
}