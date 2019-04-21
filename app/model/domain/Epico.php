<?php
class Epico
{
    private $idEpico;
    private $Epico;
    private $Ordem;
    private $Necessidade;
    private $idPessoa;
	
    public function __construct(
        $idEpico,
        $Epico,
        $Ordem,
        $Necessidade,
        $idPessoa)
    {
        $this->idEpico = $idEpico;
        $this->Epico = $Epico;
        $this->Ordem = $Ordem;
        $this->Necessidade = $Necessidade;
        $this->idPessoa = $idPessoa;
        
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
        return $this->Epico;
    }
    /**
     * @param mixed $Epico
     */
    public function setEpico($Epico)
    {
        $this->Epico = $Epico;
    }
    
     
    /**
     * @return mixed
     */
    public function getOrdem()
    {
        return $this->Ordem;
    }
    /**
     * @param mixed $Ordem
     */
    public function setOrdem($Ordem)
    {
        $this->Ordem = $Ordem;
    }
    /**
     * @return mixed
     */
    public function getNecessidade()
    {
        return $this->Necessidade;
    }
    /**
     * @param mixed $Necessidade
     */
    public function setNecessidade($Necessidade)
    {
        $this->Necessidade = $Necessidade;
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
    
}