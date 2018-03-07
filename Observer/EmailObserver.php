<?php

namespace Observer;

/**
 * Class EmailObserver
 * @package Observer
 */
class EmailObserver implements Observer
{
    /**
     * @param string $codigo
     */
    public function atualizado(string $codigo)
    {
        $this->enviaEmailEstoqueZerado($codigo);
    }

    /**
     * @param string $codigoProduto
     */
    public function enviaEmailEstoqueZerado(string $codigoProduto)
    {
        // Simula o envio de um email para o setor financeiro informando que o estoque do produto est� zerado.
    }
}