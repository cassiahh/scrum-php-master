<?php

class Usuario
{

    private $ra;
    private $nome;
    private $papel;
    private $senha;

    public function __construct(
        $ra,
        $nome,
        $papel,
		$senha)
    {
        $this->ra = $ra;
        $this->nome = $nome;
        $this->papel = $papel;
        $this->senha = $senha;
        
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
    public function getPapel()
    {
        return $this->papel;
    }

    /**
     * @param mixed $papel
     */
    public function setPapel($papel)
    {
        $this->papel = $papel;
    }



    /**
     * @return mixed
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    
}
