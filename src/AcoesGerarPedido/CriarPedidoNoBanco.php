<?php

namespace Alura\DesignPattern\AcoesGerarPedido;

use Alura\DesignPattern\Pedido;
use SplSubject;

class CriarPedidoNoBanco implements \SplObserver
{
    public function update(SplSubject $subject): void
    {
        echo "Cria pedido no banco de dados " . PHP_EOL;
    }
}
