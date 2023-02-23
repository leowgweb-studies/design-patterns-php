<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\ListaDeOrcamentos;
use Alura\DesignPattern\Orcamento;

$orcamentoFirst = new Orcamento();
$orcamentoFirst->qtdItens = 7;
$orcamentoFirst->aprova();
$orcamentoFirst->valor = 1500.75;

$orcamentoSecond = new Orcamento();
$orcamentoSecond->qtdItens = 3;
$orcamentoSecond->reprova();
$orcamentoSecond->valor = 150;

$orcamentoThirth = new Orcamento();
$orcamentoThirth->qtdItens = 5;
$orcamentoThirth->aprova();
$orcamentoThirth->finaliza();
$orcamentoThirth->valor = 1350;

$listaOrcamentos = new ListaDeOrcamentos();
$listaOrcamentos->addOrcamento($orcamentoFirst);
$listaOrcamentos->addOrcamento($orcamentoSecond);
$listaOrcamentos->addOrcamento($orcamentoThirth);

foreach ($listaOrcamentos as $orcamento) {
    echo 'Valor: ' . $orcamento->valor . PHP_EOL;
    echo 'Estado: ' . get_class($orcamento->estadoAtual) . PHP_EOL;
    echo 'Valor: ' . $orcamento->qtdItens . PHP_EOL;

    echo PHP_EOL;
}
