<?php

class Tarefa
{
    private $idHistoria;
    private $gostariaHistoria;
    private $idEpico;
    private $objetivoHistoria;

    public function __construct(
        $idHistoria,
        $gostariaHistoria,
        $idEpico,
        $objetivoHistoria)
    {
        $this->idHistoria = $idHistoria;
        $this->gostariaHistoria = $gostariaHistoria;
        $this->idEpico = $idEpico;
        $this->objetivoHistoria = $objetivoHistoria;
    }

    /**
     * @return mixed
     */
    public function getIdHistoria()
    {
        return $this->IdHistoria;
    }

    /**
     * @param mixed $IdHistoria
     */
    public function setIdHistoria($IdHistoria)
    {
        $this->IdHistoria = $IdHistoria;
    }

    /**
     * @return mixed
     */
    public function getHistoria()
    {
        return $this->historia;
    }

    /**
     * @param mixed $historia
     */
    public function setHistoria($historia)
    {
        $this->tarefa = $historia;
    }

    /**
     * @return mixed
     */
    public function getgostariaHistoria()
    {
        return $this->gostariaHistoria;
    }

    /**
     * @param mixed $gostariaHistoria
     */
    public function setgostariaHistoria($gostariaHistoria)
    {
        $this->gostariaHistoria = $gostariaHistoria;
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
    public function setIdEpico($idEpico)
    {
        $this->idEpico = $idEpico;
    }

    /**
     * @return mixed
     */
    public function getobjetivoHistoria()
    {
        return $this->objetivoHistoria;
    }

    /**
     * @param mixed $ra
     */
    public function setobjetivoHistoria($objetivoHistoria)
    {
        $this->ra = $objetivoHistoria;
    }

}
