<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 04/04/19
 * Time: 00:47
 */

class TarefaBuilder
{
    public function __construct($array)
    {
        return new Tarefa(
            $array['idTarefa'],
            $array['tarefa'],
            $array['idSprint'],
            $array['ra'],
            $array['status'],
            $array['inicio'],
            $array['termino'],
            $array['objetivo'],
            $array['dependencia'],
            $array['prioridade']
        );
    }
}