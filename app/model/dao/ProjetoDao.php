<?php
require_once (__DIR__."/../domain/Projeto.php");

class ProjetoDao
{
    private $conexao;

    function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    function listaProjeto()
    {
        $projetos = array();
        $resultado = mysqli_query($this->conexao, "select * from Projeto");
        while ($array = mysqli_fetch_assoc($resultado)) {
            array_push(
                $projetos, 
                new Projeto(
                    $array['projeto'],
                    $array['cliente'],
                    $array['projectOwner']
                    )
            );
        }
        return $projetos;
    }

   
    function insereProjeto(Projeto $projeto)
    {
        $query = "insert into Projeto (projeto, cliente, projectOwner)
            values ('{$projeto->getProjeto()},
            {$projeto->getCliente()},
            {$projeto->getProjectOwner()}";
        return mysqli_query($this->conexao, $query);
    }
    
    function alteraProjeto(Projeto $projeto)
    {
        $query = "update Projeto set projeto = '{$projeto->getProjeto()}',
            cliente = '{$projeto->getCliente()}', projectOwner= '{$projeto->getProductOwner()}'
            where projeto = '{$projeto->getProjeto($projeto)}'";
        return mysqli_query($this->conexao, $query);
    }

    function buscaProjeto($projeto)
    {
        $array=array($projeto);
        $query = "select * from Projeto";
        $resultado = mysqli_query($this->conexao, $query);
        $array = mysqli_fetch_assoc($resultado);
        return $array;
        
    }

    function removeProjeto($projeto)
    {
        $query = "delete from Projeto where projeto = {$projeto}";
        return mysqli_query($this->conexao, $query);
    }
}

?>