<?php
/**
 * Created by PhpStorm.
 * User: Camilli
 * Date: 23/05/19
 * Time: 00:47
 */

require_once(__DIR__.'/../domain/Projeto.php');

class ProjetoBuilder
{
    private $projeto;
    public function __construct($array)
    {
        $this->projeto =  new Projeto(
            $array['projeto'],
            $array['cliente'],
            $array['projectOwner']
        );
        return $this;
    }

    public function build()
    {
        return $this->projeto;
    }
}