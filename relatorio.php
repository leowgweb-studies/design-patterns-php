<?php

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Relatorio\ArquivoZipExportado;
use Alura\DesignPattern\Relatorio\OrcamentoExportado;

require 'vendor/autoload.php';

$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->qtdItens = 7;

$orcamentoExportado = new OrcamentoExportado($orcamento);
//$orcamentoExportadoXml = new \Alura\DesignPattern\Relatorio\ArquivoXmlExportado('orcamento');
$orcamentoExportadoZip = new ArquivoZipExportado('orcamento.array');

//echo $orcamentoExportadoXml->salvar($orcamentoExportado);
echo $orcamentoExportadoZip->salvar($orcamentoExportado);