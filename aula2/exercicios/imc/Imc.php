<?php

class Imc
{
    private $pessoa;

    public function __construct($pessoa)
    {
        $this->pessoa = $pessoa;
    }

    public function indice()
    {
        return $this->pessoa->getPeso() / pow(2, $this->pessoa->getAltura());
    }

    public function situacao()
    {
        $minimo = 20;
        $maximo = 25;

        if ($this->pessoa->getGenero() === 'm') {
            $minimo = 19;
            $maximo = 24;
        }

        if ($this->indice() < $minimo) {
            return 'abaixo do peso';
        } elseif ($this->indice() > $maximo) {
            return 'acima do peso';
        } else {
            return 'peso do ideal';
        }
    }
}
