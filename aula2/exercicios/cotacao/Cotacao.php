<?php

class Cotacao
{
    private $valor;
    private $dinheiroASerConvertido;

    public function __construct($valorX, $dinheiroX)
    {
        $this->valor = $valorX;
        $this->dinheiroASerConvertido = $dinheiroX;
    }

    public function converter()
    {
        $valorEmReais = $this->valor * $this->dinheiroASerConvertido->getQuantia();
        $dinheiroEmReais = new Dinheiro($valorEmReais, 'BRL');
        
        return $dinheiroEmReais;
    }
}
