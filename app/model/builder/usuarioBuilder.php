<?php
/**
 * Created by PhpStorm.
 * User: Camilli
 * Date: 23/05/19
 * Time: 00:47
 */

require_once(__DIR__ . '/../domain/Usuario.php');

class usuarioBuilder
{
    private $pessoa;
    public function __construct($array)
    {
        $this->usuario =  new Usuario(
            $array['ra'],
            $array['nome'],
            $array['papel'],
			$array['senha']
        );
        return $this;
    }

    public function build()
    {
        return $this->usuario;
    }
}