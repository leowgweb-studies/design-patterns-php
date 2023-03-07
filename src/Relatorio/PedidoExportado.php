<?php

namespace Alura\DesignPattern\Relatorio;

use Alura\DesignPattern\Orcamento;

class PedidoExportado implements ConteudoExportado
{
    public function __construct(
        private Orcamento $orcamento
    )
    {
    }

    public function conteudo(): array
    {
        return [
            'valor' => $this->orcamento->valor,
            'qtd_itens' => $this->orcamento->qtdItens,
        ];
    }
}