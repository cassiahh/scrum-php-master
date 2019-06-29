<?php

require_once (__DIR__."/../domain/Pessoa.php");

class PessoaDao
{
    private $conexao;

    function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    function listaPessoas()
    {
        $arrays = array();
        $resultado = mysqli_query($this->conexao, "select * from Pessoa");
        while ($array = mysqli_fetch_assoc($resultado)) {
            array_push($arrays, $array);
        }
        return $arrays;
    }

   
    function inserePessoas()
    {
        $query = "insert into Pessoa (ra, nome,papel)
            values ('{$pessoa->getRa()}',
            '{$pessoa->getNome()}',
            '{$pessoa->getPapel()}'";
        return mysqli_query($this->conexao, $query);
    }

    function alteraPessoa()
    {
        $query = "update Pessoa set ra = '{$pessoa->getRa()}',
            nome = '{$pessoa->getNome()}', papel= '{$pessoa->getPapel()}'
            where ra = '{$ra}'";
        return mysqli_query($this->conexao, $query);
    }

    function buscaPessoa($ra)
    {
        $query = "select * from Pessoa where ra = '{$ra}'";
        $resultado = mysqli_query($this->conexao, $query);
        $array = mysqli_fetch_assoc($resultado);
        return $array;
    }

    function removePessoas($ra)
    {
        $query = "delete from Pessoa where ra = '{$ra}'";
        return mysqli_query($this->conexao, $query);
    }

    function buscaUsuario($ra, $senha) {
        $senhaMd5 = md5($senha);
        $ra = mysqli_real_escape_string($this->conexao, $ra);
        $query = "select * from Pessoa where ra='{$ra}' and senha='{$senhaMd5}'";
        $resultado = mysqli_query($this->conexao, $query);
        $pessoa = mysqli_fetch_assoc($resultado);
        return $pessoa;
    }
}
