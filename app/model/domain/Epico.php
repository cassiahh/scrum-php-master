<?php
class Epico
{
    private $idEpico;
    private $epico;
    private $ordem;
    private $necessidade;
    private $ra;
	
    public function __construct(
        $idEpico,
        $epico,
        $ordem,
        $necessidade,
        $ra)
    {
        $this->idEpico = $idEpico;
        $this->epico = $epico;
        $this->ordem = $ordem;
        $this->necessidade = $necessidade;
        $this->ra = $ra;
        
    }
    /**
     * @return mixed
     */
    public function getIdEpico()
    {
        return $this->idEpico;
    }
    /**
     * @param mixed $idEpico
     */
    public function setIdEpico($idEpico)
    {
        $this->idEpico = $idEpico;
    }
    /**
     * @return mixed
     */
    public function getEpico()
    {
        return $this->epico;
    }
    /**
     * @param mixed $epico
     */
    public function setEpico($epico)
    {
        $this->epico = $epico;
    }
    
     
    /**
     * @return mixed
     */
    public function getOrdem()
    {
        return $this->ordem;
    }
    /**
     * @param mixed $ordem
     */
    public function setOrdem($ordem)
    {
        $this->ordem = $ordem;
    }
    /**
     * @return mixed
     */
    public function getNecessidade()
    {
        return $this->necessidade;
    }
    /**
     * @param mixed $necessidade
     */
    public function setNecessidade($necessidade)
    {
        $this->necessidade = $necessidade;
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
    
}