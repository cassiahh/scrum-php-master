<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 04/04/19
 * Time: 00:47
 */

require_once(__DIR__.'/../domain/Tarefa.php');

class TarefaBuilder
{
    private $tarefa;
    public function __construct($array)
    {
        $this->tarefa =  new Tarefa(
            $array['idHistoria'],
            $array['idFuncionalidade'],
            $array['idTarefa'],
            $array['tarefa'],
            $array['idSprint'],
            $array['ra'],
            $array['status'],
            $array['inicio'],
            $array['tempo'],
            $array['termino'],
            $array['duracao'],
            $array['dependencia'],
            $array['prioridade']
        );
        return $this;
    }

    public function build()
    {
        return $this->tarefa;
    }
}