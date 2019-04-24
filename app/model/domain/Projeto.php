<?php

class Projeto
{

    private $projeto;
    private $cliente;
    private $productOwner;
   
    public function __construct(
        $projeto,
        $cliente,
        $productOwner)
    {
        $this->projeto = $projeto;
        $this->cliente = $cliente;
        $this->productOwner = $productOwner;
        
    }

    /**
     * @return mixed
     */
    public function getProjeto()
    {
        return $this->projeto;
    }

    /**
     * @param mixed $projeto
     */
    public function setProjeto($projeto)
    {
        $this->projeto = $projeto;
    }

    /**
     * @return mixed
     */
    public function getCliente()
    {
        return $this->cliente;
    }

    /**
     * @param mixed $cliente
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;
    }
    

    /**
     * @return mixed
     */
    public function getProductOwner()
    {
        return $this->productOwner;
    }

    /**
     * @param mixed $productOwner
     */
    public function setProductOwner($productOwner)
    {
        $this->productOwner = $productOwner;
    }

}
