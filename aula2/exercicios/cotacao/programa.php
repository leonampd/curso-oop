<?php
// carrega as classes atraves dos arquivos
require 'Dinheiro.php';
require 'Cotacao.php';

// instancia os objetos
$dolar = new Dinheiro(1, 'USD');
$cotacao = new Cotacao(4.13, $dolar);

// invoca o método responsável pela conversão e armazena o valor na variável
$real = $cotacao->converter();

echo $dolar->getQuantia() . ' ' . $dolar->getMoeda() . ' equivale ' . $real->getQuantia() . ' em ' . $real->getMoeda();
