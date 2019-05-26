<?php
/**
 * Created by PhpStorm.
 * User: Lucas
 * Date: 26/05/19
 * Time: 17:00
 */

require_once(__DIR__.'/../domain/Historia.php');

class historiaBuilder
{
    private $historia;
    public function __construct($array)
    {
        $this->historia =  new Funcionalidade(
            $array['idHistoria'],
            $array['gostariaHistoria'],
            $array['idEpico'],
            $array['objetivoHistoria']

        );
        return $this;
    }

    public function build()
    {
        return $this->historia;
    }
}