<?php

class Pessoa
{
    private $peso;
    private $altura;
    private $genero;

    public function __construct($peso, $altura, $genero)
    {
        $this->peso = $peso;
        $this->altura = $altura;
        $this->genero = $genero;
    }

    public function getPeso()
    {
        return $this->peso;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function getGenero()
    {
        return $this->genero;
    }
}
