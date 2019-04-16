<?php

class PessoaDao
{
    private $conexao;

    function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    function listaPessoa()
    {
        $pessoas = array();
        $resultado = mysqli_query($this->conexao, "select * from pessoa");
        while ($array = mysqli_fetch_assoc($resultado)) {
            array_push(
                $pessoas, 
                new Pessoa(
                    $array['ra'],
                    $array['nome'],
                    $array['papel']
                )
            );
        }
        return $Pessoa;
    }

   
    function inserePessoa(Pessoa $pessoa)
    {
        $query = "insert into pessoa (ra, nome,papel)
            values ('{$pessoa->getRa()},
            {$pessoa->getNome()},
            {$pessoa->getPapel()}";
        return mysqli_query($this->conexao, $query);
    }

    function alteraPessoa(Pessoa $pessoa)
    {
        $query = "update pessoa set ra = '{$pessoa->getRa()}',
            nome = {$pessoa->getNome()}, papel= {$pessoa->getPapel()}',
            where ra = '{$pessoa->getRa()}'";
        return mysqli_query($this->conexao, $query);
    }

    function buscaPessoa($ra)
    {
        $query = "select * from pessoa where ra = {$ra}";
        $resultado = mysqli_query($this->conexao, $query);
        $array = mysqli_fetch_assoc($resultado);
        return  new Pessoa(
                    $array['ra'],
                    $array['nome'],
                    $array['papel']
                );
    }

    function removePessoa($ra)
    {
        $query = "delete from pessoa where ra = {$ra}";
        return mysqli_query($this->conexao, $query);
    }
}

?>