<?php

namespace Alura\DesignPattern\Relatorio;

class ArquivoZipExportado implements ArquivoExportado
{
    public function __construct(
        private string $nomeArquivoInterno
    )
    {
    }

    public function salvar(ConteudoExportado $conteudoExportado): string
    {
        $caminhoArquivo = tempnam(sys_get_temp_dir(), 'zip');
        $arquivoZip = new \ZipArchive();
        $arquivoZip->open($caminhoArquivo);
        $arquivoZip->addFromString($this->nomeArquivoInterno, serialize($conteudoExportado));
        $arquivoZip->close();

        return $caminhoArquivo;
    }
}