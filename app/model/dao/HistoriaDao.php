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
    function countHistoria()
    {
        $arrays = array();
        $resultado = mysqli_query($this->conexao, "select idHistoria, COUNT(*) as total
                from Historia group by idHistoria");
        while ($array = mysqli_fetch_assoc($resultado)) {
            array_push($arrays, $array);
        }
        return $arrays;
    }

    function insereHistoria(Historia $historia)
    {
        $query = "insert into Historia (gostariaHistoria, idEpico, objetivoHistoria)
            values ({$historia->getgostariaHistoria()},
            '{$historia->getidEpico()}',
            {$historia->getobjetivoHistoria()},";   
        return mysqli_query($this->conexao, $query);
    }

    function alteraHistoria($idHistoria, $historia)
    {
        $query = "update Historia set idHistoria = '{$historia->getIdHistoria()}',
                  gostaria = '{$historia->getgostariaHistoria()}',
                  ra = '{$historia->getIdEpico()}', 
                  objetivo = '{$historia->getobjetivoHistoria()}'
                  where idHistoria = '{$idHistoria}'";
        return mysqli_query($this->conexao, $query);
    }

    function buscaHistoria($id)
    {
        $query = "select * from Historia where idHistoria = {$id}";
        $resultado = mysqli_query($this->conexao, $query);
        $array = mysqli_fetch_assoc($resultado);
        return  $array;
    }

    function removeHistoria($id)
    {
        $query = "delete from Historia where idHistoria = {$id}";
        return mysqli_query($this->conexao, $query);
    }
}

?>