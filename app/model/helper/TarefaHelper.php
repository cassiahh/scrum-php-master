<?php
/**
 * Created by PhpStorm.
 * User: antonio
 * Date: 04/04/19
 * Time: 00:47
 */

require_once(__DIR__ . '/../domain/Tarefa.php');

class TarefaHelper
{
    private $object;

    public function __construct($object)
    {
        $this->object = $object;
        return $this;
    }

    public function convertToArray()
    {
        return [
            'idHistoria' => $this->object->getIdHistoria(),
            'idFuncionalidade' => $this->object->getIdFuncionalidade(),
            'idTarefa' => $this->object->getidTarefa(),
            'tarefa' => $this->object->getTarefa(),
            'idSprint' => $this->object->getIdSprint(),
            'ra' => $this->object->getRa(),
            'status' => $this->object->getStatus(),
            'inicio' => $this->object->getInicio(),
            'tempo' => $this->object->getTempo(),
            'termino' => $this->object->getTermino(),
            'duracao' => $this->object->getDuracao(),
            'dependencia' => $this->object->getDependencia(),
            'prioridade' => $this->object->getPrioridade()
        ];
    }
}