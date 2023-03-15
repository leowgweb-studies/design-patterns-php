<?php

require 'vendor/autoload.php';

$orcamento = new \Alura\DesignPattern\Orcamento();
$item1 = new \Alura\DesignPattern\ItemOrcamento();
$item1->valor = 300;
$item2 = new \Alura\DesignPattern\ItemOrcamento();
$item2->valor = 500;

$orcamento->addItem($item1);
$orcamento->addItem($item2);

echo $orcamento->valor();
