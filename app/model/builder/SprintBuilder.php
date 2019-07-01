<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 26/05/19
 * Time: 17:00
 */

require_once(__DIR__.'/../domain/Sprint.php');

class SprintBuilder
{
    private $sprint;
    public function __construct($array)
    {
        $this->sprint = new Sprint(
            $array['idSprint'],
            $array['sprint'],
            $array['semana']
            );

        //return $this;
    }

    public function build()
    {
        return $this->sprint;
    }
}