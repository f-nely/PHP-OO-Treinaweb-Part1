<?php


class Cliente
{
    public $nome;

    public $idade;

    public $endereco;

    public $telefone;

    public function compra(): void
    {
        echo "O cliente {$this->nome} realizou uma compra: ";
    }

    public function defineNome(string $nome): void
    {
        $this->nome = $nome;
    }
}