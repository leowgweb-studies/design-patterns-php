<?php

namespace Alura\DesignPattern\Relatorio;

use Alura\DesignPattern\Orcamento;

class OrcamentoXml
{
    public function exportar(Orcamento $orcamento): string
    {
        $elementoOrcamento = new \SimpleXMLElement('<orcamento />');
        $elementoOrcamento->addChild('valor', $orcamento->valor);
        $elementoOrcamento->addChild('qtd_itens', $orcamento->qtdItens);

        return $elementoOrcamento->asXML();
    }
}