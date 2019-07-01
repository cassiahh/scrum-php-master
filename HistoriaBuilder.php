<?php

class HistoriaBuilder
{
    public function __construct($array)
    {
        return new Historia(
            $array['idHistoria'],
            $array['gostariaHistoria'],
            $array['Ra'],
            $array['objetivoHistoria']
        );
    }
}