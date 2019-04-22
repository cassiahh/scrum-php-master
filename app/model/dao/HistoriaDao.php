<?php

require_once (__DIR__."/../domain/Historia.php");

class HistoriaDao
{
    private $conexao;

    function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    function listaHistoria()
    {
        $arrays = array();
        $resultado = mysqli_query($this->conexao, "select * from Historia");
        while ($array = mysqli_fetch_assoc($resultado)) {
            array_push($arrays, $array);
        }
        return $arrays;
    }
    function countIdHistoria()
    {
        $arrays = array();
        $resultado = mysqli_query($this->conexao, "select idHistoria, COUNT(*) as total
                from Tarefa group by idHistoria");
        while ($array = mysqli_fetch_assoc($resultado)) {
            array_push($arrays, $array);
        }
        return $arrays;
    }

    function insereHistoria(Historia $historia)
    {
        $query = "insert into Historia (idHistoria, gostariaHistoria, idEpico, objetivoHistoria)
            values ('{$historia->getIdHistoria()}', {$historia->getgostariaHistoria()},
            '{$historia->idEpico()}',
            {$historia->getobjetivoHistoria()},";
        return mysqli_query($this->conexao, $query);
    }

    function alteraHistoria(Historia $historia)
    {
        $query = "update Historia set idHistoria = '{$historia->getIdHistoria()}', {$historia->getgostariaHistoria()},
            '{$historia->idEpico()}'";
        return mysqli_query($this->conexao, $query);
    }

    function buscaHistoria($id)
    {
        $query = "select * from Historia where id = {$id}";
        $resultado = mysqli_query($this->conexao, $query);
        $array = mysqli_fetch_assoc($resultado);
        return  new TarefaBuilder($array);
    }

    function removeHistoria($id)
    {
        $query = "delete from Historia where id = {$id}";
        return mysqli_query($this->conexao, $query);
    }
}

?>