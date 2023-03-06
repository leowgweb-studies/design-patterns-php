<?php

require 'vendor/autoload.php';

$orcamento = new \Alura\DesignPattern\Orcamento();
$orcamento->valor = 500;
$orcamento->qtdItens = 7;

$orcamentoExportado = new \Alura\DesignPattern\Relatorio\OrcamentoExportado($orcamento);
//$orcamentoExportadoXml = new \Alura\DesignPattern\Relatorio\ArquivoXmlExportado('orcamento');
$orcamentoExportadoZip = new \Alura\DesignPattern\Relatorio\ArquivoZipExportado('orcamento.array');

//echo $orcamentoExportadoXml->salvar($orcamentoExportado);
echo $orcamentoExportadoZip->salvar($orcamentoExportado);