<?php
class Funcionalidade
{
    private $codFunc;
    private $funcionalidade;
    private $idHistoria;
    private $oQue;
    private $ra;
    private $nome;
    private $idFuncionalidade;
	
    public function __construct(
        $funcionalidade,
        $idHistoria,
		$idFuncionalidade)
    { 
        $this->funcionalidade = $funcionalidade;
        $this->idHistoria = $idHistoria;
		$this->idFuncionalidade = $idFuncionalidade;
        
    }
    /**
     * @return mixed
     */
    public function getCodFunc()
    {
        return $this->codFunc;
    }
    /**
     * @param mixed $codFunc
     */
    public function setCodFunc($codFunc)
    {
        $this->codFunc = $codFunc;
    }
    /**
     * @return mixed
     */
    public function getFuncionalidade()
    {
        return $this->funcionalidade;
    }
    /**
     * @param mixed $funcionalidade
     */
    public function setFuncionalidade($funcionalidade)
    {
        $this->funcionalidade = $funcionalidade;
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
    public function getOQue()
    {
        return $this->oQue;
    }
    /**
     * @param mixed $oQue
     */
    public function setOQue($oQue)
    {
        $this->oQue = $oQue;
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
    public function getNome()
    {
        return $this->nome;
    }
    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
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
    
}