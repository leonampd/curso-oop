<?php
require 'Pessoa.php';
require 'Imc.php';

$homem = new Pessoa(75, 1.75, 'm');
$imc = new Imc($homem);

echo $imc->situacao();
