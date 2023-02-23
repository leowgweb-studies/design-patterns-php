<?php

require_once 'vendor/autoload.php';

use Alura\DesignPattern\{GerarPedido, GerarPedidoHandler, Orcamento, Pedido};
use Alura\DesignPattern\AcoesGerarPedido\CriarPedidoNoBanco;
use Alura\DesignPattern\AcoesGerarPedido\EnviarPedidoPorEmail;
use Alura\DesignPattern\AcoesGerarPedido\LogGerarPedido;

$valorOrcamento = $argv[1];
$numeroItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroItens, $nomeCliente);

$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->attach(new EnviarPedidoPorEmail());
$gerarPedidoHandler->attach(new CriarPedidoNoBanco());
$gerarPedidoHandler->attach(new LogGerarPedido());
$gerarPedidoHandler->execute($gerarPedido);
