<?php

require_once (__DIR__."/../domain/sprint.php");

class SprintDao
{
    private $conexao;

    public function __construct($conexao)
    {
        $this->conexao = $conexao;
    }

    public function listaSprints()
    {
        $arrays = array();
        $resultado = mysqli_query($this->conexao, "select * from Sprint");
        while ($array = mysqli_fetch_assoc($resultado)) {
            array_push($arrays, $array);
        }
        return $arrays;
    }

    function countSprint()
    {
        $arrays = array();
        $resultado = mysqli_query($this->conexao, "select idSprint, COUNT(*) as total
                from Sprint group by idSprint");
        while ($array = mysqli_fetch_assoc($resultado)) {
            array_push($arrays, $array);
        }
        return $arrays;
    }

    public function insereSprint(Sprint $sprint)
    {
        $query = "insert into Sprint (idSprint, sprint, semana)
            values ('{$sprint->getIdSprint()}', '{$sprint->getSprint()}', '{$sprint->getSemana()}')";
        return mysqli_query($this->conexao, $query);
    }

    public function alteraSprint(Sprint $sprint)
    {
        $query = "update sprint set idSprint = '{$sprint->getSprint()}',
            sprint = {$sprint->getSprint()}, semana = '{$sprint->getSemana()}',
            where idSprint = '{$sprint->getIdSprint()}'"; 
        return mysqli_query($this->conexao, $query);
    }

    public function buscaSprint($idSprint)
    {
        $query = "select * from sprint where idSprint = {$idSprint}";
        $resultado = mysqli_query($this->conexao, $query);
        $array = mysqli_fetch_assoc($resultado);
        return  new Sprint(
            $array['idSprint'],
            $array['sprint'],
            $array['semana']
            );
    }

    function removeSprint($idSprint)
    {
        $query = "delete from sprint where idSprint = {$idSprint}";
        return mysqli_query($this->conexao, $query);
    }
}

?>