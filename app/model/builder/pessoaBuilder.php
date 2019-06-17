<?php
/**
 * Created by PhpStorm.
 * User: Camilli
 * Date: 23/05/19
 * Time: 00:47
 */

require_once(__DIR__.'/../domain/Pessoa.php');

class pessoaBuilder
{
    private $pessoa;
    public function __construct($array)
    {
        $this->pessoa =  new Pessoa(
            $array['ra'],
            $array['nome'],
            $array['papel']
        );
        return $this;
    }

    public function build()
    {
        return $this->pessoa;
    }
}