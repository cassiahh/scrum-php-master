<?php

class Sprint
{
    private $idSprint;
    private $sprint;
    private $semana;
    

    public function __construct(
        $idSprint,
        $sprint,
        $semana){
        
        $this->idSprint = $idSprint;
        $this->sprint = $sprint;
        $this->semana = $semana;
        
    }

   
    public function getIdSprint(){
        return $this->idSprint;
    }
    public function setIdSprint($idSprint){
        $this->idSprint = $idSprint;
    }
    public function getSprint(){
        return $this->sprint;
    }
    public function setSprint($sprint){
        $this->sprint = $sprint;
    }
    public function getSemana(){
        return $this->semana;
    }
    public function setSemana($semana){
        $this->semana = $semana;
    }
}
