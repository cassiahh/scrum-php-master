<?php

class Tarefa
{
    private $idHistoria;
    private $idFuncionalidade;
    private $idTarefa;
    private $tarefa;
    private $idSprint;
    private $ra;
    private $status;
    private $inicio;
    private $tempo;
    private $termino;
    private $duracao;
    private $dependencia;
    private $prioridade;

    /**
     * Tarefa constructor.
     * @param $idHistoria
     * @param $idFuncionalidade
     * @param $idTarefa
     * @param $tarefa
     * @param $idSprint
     * @param $ra
     * @param $status
     * @param $inicio
     * @param $tempo
     * @param $termino
     * @param $duracao
     * @param $dependencia
     * @param $prioridade
     */
    public function __construct($idHistoria, $idFuncionalidade, $idTarefa, $tarefa, $idSprint, $ra, $status, $inicio, $tempo, $termino, $duracao, $dependencia, $prioridade)
    {
        $this->idHistoria = $idHistoria;
        $this->idFuncionalidade = $idFuncionalidade;
        $this->idTarefa = $idTarefa;
        $this->tarefa = $tarefa;
        $this->idSprint = $idSprint;
        $this->ra = $ra;
        $this->status = $status;
        $this->inicio = $inicio;
        $this->tempo = $tempo;
        $this->termino = $termino;
        $this->duracao = $duracao;
        $this->dependencia = $dependencia;
        $this->prioridade = $prioridade;
    }

    /**
     * @return mixed
     */
    public function getIdHistoria()
    {
        return $this->idHistoria;
    }

    /**
     * @param mixed $idHistoria
     */
    public function setIdHistoria($idHistoria)
    {
        $this->idHistoria = $idHistoria;
    }

    /**
     * @return mixed
     */
    public function getIdFuncionalidade()
    {
        return $this->idFuncionalidade;
    }

    /**
     * @param mixed $idFuncionalidade
     */
    public function setIdFuncionalidade($idFuncionalidade)
    {
        $this->idFuncionalidade = $idFuncionalidade;
    }

    /**
     * @return mixed
     */
    public function getIdTarefa()
    {
        return $this->idTarefa;
    }

    /**
     * @param mixed $idTarefa
     */
    public function setIdTarefa($idTarefa)
    {
        $this->idTarefa = $idTarefa;
    }

    /**
     * @return mixed
     */
    public function getTarefa()
    {
        return $this->tarefa;
    }

    /**
     * @param mixed $tarefa
     */
    public function setTarefa($tarefa)
    {
        $this->tarefa = $tarefa;
    }

    /**
     * @return mixed
     */
    public function getIdSprint()
    {
        return $this->idSprint;
    }

    /**
     * @param mixed $idSprint
     */
    public function setIdSprint($idSprint)
    {
        $this->idSprint = $idSprint;
    }

    /**
     * @return mixed
     */
    public function getRa()
    {
        return $this->ra;
    }

    /**
     * @param mixed $ra
     */
    public function setRa($ra)
    {
        $this->ra = $ra;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getInicio()
    {
        return $this->inicio;
    }

    /**
     * @param mixed $inicio
     */
    public function setInicio($inicio)
    {
        $this->inicio = $inicio;
    }

    /**
     * @return mixed
     */
    public function getTempo()
    {
        return $this->tempo;
    }

    /**
     * @param mixed $tempo
     */
    public function setTempo($tempo)
    {
        $this->tempo = $tempo;
    }

    /**
     * @return mixed
     */
    public function getTermino()
    {
        return $this->termino;
    }

    /**
     * @param mixed $termino
     */
    public function setTermino($termino)
    {
        $this->termino = $termino;
    }

    /**
     * @return mixed
     */
    public function getDuracao()
    {
        return $this->duracao;
    }

    /**
     * @param mixed $duracao
     */
    public function setDuracao($duracao)
    {
        $this->duracao = $duracao;
    }

    /**
     * @return mixed
     */
    public function getDependencia()
    {
        return $this->dependencia;
    }

    /**
     * @param mixed $dependencia
     */
    public function setDependencia($dependencia)
    {
        $this->dependencia = $dependencia;
    }

    /**
     * @return mixed
     */
    public function getPrioridade()
    {
        return $this->prioridade;
    }

    /**
     * @param mixed $prioridade
     */
    public function setPrioridade($prioridade)
    {
        $this->prioridade = $prioridade;
    }

}
