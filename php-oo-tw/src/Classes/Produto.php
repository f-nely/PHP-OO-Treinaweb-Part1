<?php


class Produto
{
    public $titulo;

    public $descricao = "Cerveja Brasileira";

    public $preco;

    public function defineCodigoBarras(string $codigo): void
    {
        $this->codigoBarras = $codigo; //Propriedade em tempo de execução
    }

    public function acessaCodigoBarras()
    {
        return $this->codigoBarras;
    }
}