<?php

class Tarefa
{
    private $idTarefa;
    private $tarefa;
    private $idSprint;
    private $idHistoria;
    private $idPessoa;
    private $status;
    private $inicio;
    private $termino;
    private $objetivo;
    private $dependencia;
    private $prioridade;

    public function __construct(
        $idTarefa,
        $tarefa,
        $idSprint,
        $idHistoria,
        $idPessoa,
        $status,
        $inicio,
        $termino,
        $objetivo,
        $dependencia,
        $prioridade)
    {
        $this->idTarefa = $idTarefa;
        $this->tarefa = $tarefa;
        $this->idSprint = $idSprint;
        $this->idHistoria = $idHistoria;
        $this->idPessoa = $idPessoa;
        $this->status = $status;
        $this->inicio = $inicio;
        $this->termino = $termino;
        $this->objetivo = $objetivo;
        $this->dependencia = $dependencia;
        $this->prioridade = $prioridade;
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
    public function getIdPessoa()
    {
        return $this->idPessoa;
    }

    /**
     * @param mixed $idPessoa
     */
    public function setIdPessoa($idPessoa)
    {
        $this->idPessoa = $idPessoa;
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
    public function getObjetivo()
    {
        return $this->objetivo;
    }

    /**
     * @param mixed $objetivo
     */
    public function setObjetivo($objetivo)
    {
        $this->objetivo = $objetivo;
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
