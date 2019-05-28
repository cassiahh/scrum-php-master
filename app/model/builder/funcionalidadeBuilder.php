<?php
/**
 * Created by PhpStorm.
 * User: Camilli
 * Date: 23/05/19
 * Time: 00:47
 */

require_once(__DIR__.'/../domain/Funcionalidade.php');

class funcionalidadeBuilder
{
    private $funcionalidade;
    public function __construct($array)
    {
        $this->funcionalidade =  new Funcionalidade(
            $array['funcionalidade'],
            $array['idHistoria'],
            $array['idFuncionalidade']
        );
        return $this;
    }

    public function build()
    {
        return $this->funcionalidade;
    }
}