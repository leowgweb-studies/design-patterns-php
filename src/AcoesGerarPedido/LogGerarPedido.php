<?php

namespace Alura\DesignPattern\AcoesGerarPedido;

use Alura\DesignPattern\Pedido;
use SplSubject;

class LogGerarPedido implements \SplObserver
{
    public function update(SplSubject $subject): void
    {
        echo "Gerar logs " . PHP_EOL;
    }
}
