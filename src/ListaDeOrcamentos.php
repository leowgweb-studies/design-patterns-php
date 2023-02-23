<?php

namespace Alura\DesignPattern;

class ListaDeOrcamentos implements \IteratorAggregate
{
    private array $orcamentos = [];

    public function addOrcamento(Orcamento $orcamento)
    {
        $this->orcamentos[] = $orcamento;
    }

    public function orcamentos(): array
    {
        return $this->orcamentos;
    }

    public function getIterator(): \Traversable
    {
        return new \ArrayIterator($this->orcamentos());
    }
}
