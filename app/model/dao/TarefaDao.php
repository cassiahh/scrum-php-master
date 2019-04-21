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
        $tarefas = array();
        $resultado = mysqli_query($this->conexao, "select t.*, p.nome, p.papel
                from tarefa as t join pessoa as p on t.ra=p.ra ");
        while ($array = mysqli_fetch_assoc($resultado)) {
            array_push($tarefas, new TarefaBuilder($array));
        }
        return $tarefas;
    }

    function insereTarefa(Tarefa $tarefa)
    {
        $query = "insert into tarefas (idSprint, tarefa, ra, status,
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
        $query = "update tarefas set idSprint = '{$tarefa->getTarefa()}',
            tarefa = {$tarefa->getTarefa()}, ra = '{$tarefa->getPessoa()->getra()}',
            status= {$tarefa->getStatus()}, inicio = {$tarefa->getInicio()}, termino = '{$tarefa->getTermino()}',
            objetivo = '{$tarefa->getObjetivo()}' where id = '{$tarefa->getId()}'";
        return mysqli_query($this->conexao, $query);
    }

    function buscaTarefa($id)
    {
        $query = "select * from tarefas where id = {$id}";
        $resultado = mysqli_query($this->conexao, $query);
        $array = mysqli_fetch_assoc($resultado);
        return  new TarefaBuilder($array);
    }

    function removeTarefa($id)
    {
        $query = "delete from tarefas where id = {$id}";
        return mysqli_query($this->conexao, $query);
    }
}

?>