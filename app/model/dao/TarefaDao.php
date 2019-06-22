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
        $resultado = mysqli_query($this->conexao,
            "select distinct concat(t.idHistoria,'.',t.idFuncionalidade,'.',t.idTarefa) as cod_tar, t.*,p.nome, p.papel, f.funcionalidade
                        from Tarefa as t 
                        join Pessoa as p on t.ra=p.ra 
                        join Funcionalidade as f on t.idFuncionalidade=f.idFuncionalidade 
                        group by cod_tar
                        order by t.idHistoria, t.idFuncionalidade, t.idTarefa");
        while ($array = mysqli_fetch_assoc($resultado)) {
            array_push($arrays, $array);
        }
        return $arrays;
    }
    function listaTarefasFiltro($idSprint)
    {
        $arrays = array();
        $resultado = mysqli_query($this->conexao,
            "select distinct concat(t.idHistoria,'.',t.idFuncionalidade,'.',t.idTarefa) as cod_tar, t.*,p.nome, p.papel, f.funcionalidade
                        from Tarefa as t 
                        join Pessoa as p on t.ra=p.ra 
                        join Funcionalidade as f on t.idFuncionalidade=f.idFuncionalidade 
                        where t.idSprint = ".$idSprint."
                        group by cod_tar
                        order by t.idHistoria, t.idFuncionalidade, t.idTarefa");
        while ($array = mysqli_fetch_assoc($resultado)) {
            array_push($arrays, $array);
        }
        return $arrays;
    }
    function listaProductBacklog()
    {
        $arrays = array();
        $resultado = mysqli_query($this->conexao,
            "select distinct concat(t.idHistoria,'.',t.idFuncionalidade,'.',t.idTarefa) as cod_tar, 
                        t.idHistoria as idHistoria,
                        t.idFuncionalidade as idFuncionalidade,
                        t.idTarefa as idTarefa,
                        t.idSprint as idSprint,
                        f.funcionalidade as funcionalidade,
                        t.tarefa as tarefa,
                        t.dependencia as dependencia,
                        t.prioridade as prioridade,
                        t.duracao as duracao,
                        p.nome as nome, 
                        p.papel as papel
                        from Tarefa as t 
                        join Pessoa as p on t.ra=p.ra 
                        join Funcionalidade as f on t.idFuncionalidade=f.idFuncionalidade 
                        group by cod_tar
                        UNION
                        select 
                        distinct concat(u.idHistoria,'.',u.idFuncionalidade) as cod_tar, 
                        u.idHistoria as idHistoria,
                        u.idFuncionalidade as idFuncionalidade,
                        null as idTarefa,
                        null as idSprint,
                        u.funcionalidade as funcionalidade,
                        null as tarefa,
                        null as dependencia,
                        null as prioridade,
                        null as duracao,
                        null as nome, 
                        null as papel
                        from Funcionalidade as u
                        where not EXISTS (
                            select a.* from Tarefa as a
                            where a.idFuncionalidade=u.idFuncionalidade)
                        order by idHistoria, idFuncionalidade, idTarefa;");
        while ($array = mysqli_fetch_assoc($resultado)) {
            array_push($arrays, $array);
        }
        return $arrays;
    }

    function funcionalidadeAttributes()
    {
        $arrays = array();
        $resultado = mysqli_query($this->conexao,
            "select concat(idHistoria, '.', idFuncionalidade) as cod_func,
                    COUNT(distinct idSprint) as qtdSprints,
                    SUM(duracao) as somaDuracao, 
                    MAX(idTarefa) as maxIdTarefa
                    from Tarefa group by cod_func");
        while ($array = mysqli_fetch_assoc($resultado)) {
            array_push($arrays, $array);
        }
        return $arrays;
    }

    function insereTarefa(Tarefa $tarefa)
    {
        $query = "insert into Tarefa (idHistoria, idFuncionalidade, idTarefa, tarefa, idSprint, ra, status, inicio, tempo, termino, duracao, dependencia, prioridade)
            values (
            {$tarefa->getIdHistoria()},
            {$tarefa->getIdFuncionalidade()},
            {$tarefa->getIdTarefa()},
            '{$tarefa->getTarefa()}',
            {$tarefa->getIdSprint()},
            '{$tarefa->getRa()}', 
            '{$tarefa->getStatus()}',
            '{$tarefa->getInicio()}', 
            '{$tarefa->getTempo()}', 
            '{$tarefa->getTermino()}', 
            '{$tarefa->getDuracao()}', 
            '{$tarefa->getDependencia()}',
            '{$tarefa->getPrioridade()}')";
        return mysqli_query($this->conexao, $query);
    }

    function alteraTarefa($idHistoria, $idFuncionalidade, $idTarefa, Tarefa $tarefa)
    { 
        $query = "update Tarefa set 
            idHistoria = '{$tarefa->getIdHistoria()}', 
            idFuncionalidade = '{$tarefa->getIdFuncionalidade()}', 
            idTarefa = '{$tarefa->getIdTarefa()}', 
            tarefa = '{$tarefa->getTarefa()}', 
            idSprint = '{$tarefa->getIdSprint()}', 
            ra = '{$tarefa->getRa()}', 
            status = '{$tarefa->getStatus()}', 
            inicio = '{$tarefa->getInicio()}', 
            tempo = '{$tarefa->getTempo()}', 
            termino = '{$tarefa->getTermino()}', 
            duracao = '{$tarefa->getDuracao()}', 
            dependencia = '{$tarefa->getDependencia()}', 
            prioridade = '{$tarefa->getPrioridade()}' 
            where 
            idHistoria = '{$idHistoria}' AND
            idFuncionalidade = '{$idFuncionalidade}' AND
            idTarefa = '{$idTarefa}'"
        ;
        return mysqli_query($this->conexao, $query);
    }

    function buscaTarefa($idHistoria, $idFuncionalidade, $idTarefa)
    {  
        $query = "select * from Tarefa where 
            idHistoria = '{$idHistoria}' AND
            idFuncionalidade = '{$idFuncionalidade}' AND
            idTarefa = '{$idTarefa}'";
        $resultado = mysqli_query($this->conexao, $query);
        $array = mysqli_fetch_assoc($resultado);
        return  $array;
    }

    function removeTarefa($idHistoria, $idFuncionalidade, $idTarefa)
    {
        $query = "delete from Tarefa where 
                    idHistoria = '{$idHistoria}' AND
                    idFuncionalidade = '{$idFuncionalidade}' AND
                    idTarefa = '{$idTarefa}'";
        return mysqli_query($this->conexao, $query);
    }
}

?>