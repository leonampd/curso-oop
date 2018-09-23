<?php

class Dinheiro
{
    private $quantia;
    private $moeda;

    public function __construct($quantiaX, $moedaX)
    {
        $this->quantia = $quantiaX;
        $this->moeda = $moedaX;
    }

    public function getQuantia()
    {
        return $this->quantia;
    }

    public function getMoeda()
    {
        return $this->moeda;
    }
}
