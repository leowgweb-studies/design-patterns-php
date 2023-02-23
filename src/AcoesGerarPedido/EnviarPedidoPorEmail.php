<?php

namespace Alura\DesignPattern\AcoesGerarPedido;

use Alura\DesignPattern\Pedido;
use SplSubject;

class EnviarPedidoPorEmail implements \SplObserver
{
    public function update(SplSubject $subject): void
    {
        echo $subject->pedido->nomeCliente . PHP_EOL;
        echo "Envia e-mail para cliente " . PHP_EOL;
    }
}
