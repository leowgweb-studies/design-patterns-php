<?php

namespace Alura\DesignPattern;

class GerarPedido
{
    public function __construct(
        private float $valorOrcamento,
        private int $numeroItens,
        private string $nomeCliente
    ) {
    }

    public function getNumeroItens(): int
    {
        return $this->numeroItens;
    }

    public function getValorOrcamento(): float
    {
        return $this->valorOrcamento;
    }

    public function getNomeCliente(): string
    {
        return $this->nomeCliente;
    }
}
