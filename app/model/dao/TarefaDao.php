<?php

require_once (__DIR__."/../domain/Tarefa.php");

class TarefaDao
{
    private $conexao;

    function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    function listaTarefas()
    {
        $arrays = array();
        $resultado = mysqli_query($this->conexao, "select t.*, p.nome, p.papel
                from Tarefa as t join Pessoa as p on t.ra=p.ra order by t.idHistoria, t.idSprint");
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

    function countIdHistoriaIdSprint()
    {
        $arrays = array();
        $resultado = mysqli_query($this->conexao, "select concat(idHistoria, '-', idSprint),idHistoria,idSprint, COUNT(*) as total
                from Tarefa group by concat(idHistoria, '-', idSprint)");
        while ($array = mysqli_fetch_assoc($resultado)) {
            array_push($arrays, $array);
        }
        return $arrays;
    }

    function insereTarefa(Tarefa $tarefa)
    {
        $query = "insert into Tarefa (idSprint, tarefa, ra, status,
            inicio, termino, objetivo)
            values ('{$tarefa->getIdSprint()}', {$tarefa->getTarefa()},
            '{$tarefa->getPessoa()->getra()}',
            {$tarefa->getStatus()},
            {$tarefa->getInicio()}, '{$tarefa->getTermino()}', '{$tarefa->getStatus()}',
            '{$tarefa->getObjetivo()}')";
        return mysqli_query($this->conexao, $query);
    }

    function alteraTarefa(Tarefa $tarefa)
    {
        $query = "update Tarefa set idSprint = '{$tarefa->getTarefa()}',
            tarefa = {$tarefa->getTarefa()}, ra = '{$tarefa->getPessoa()->getra()}',
            status= {$tarefa->getStatus()}, inicio = {$tarefa->getInicio()}, termino = '{$tarefa->getTermino()}',
            objetivo = '{$tarefa->getObjetivo()}' where id = '{$tarefa->getId()}'";
        return mysqli_query($this->conexao, $query);
    }

    function buscaTarefa($id)
    {
        $query = "select * from Tarefa where id = {$id}";
        $resultado = mysqli_query($this->conexao, $query);
        $array = mysqli_fetch_assoc($resultado);
        return  new TarefaBuilder($array);
    }

    function removeTarefa($id)
    {
        $query = "delete from Tarefa where id = {$id}";
        return mysqli_query($this->conexao, $query);
    }
}

?>