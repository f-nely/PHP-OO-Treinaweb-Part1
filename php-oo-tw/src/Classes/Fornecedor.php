<?php


class Fornecedor
{
    public const PAIS = "Brasil";

    public $razaoSocial;

    public $nomeFantasia;

    public $cnpj;

    public function autoriza($usuario)
    {
        if ($usuario->nome == "James" && $usuario->senha == "525") {
            echo "Usuário {$usuario->name} autorizado";
        } else {
            echo "Acesso não permitido";
        }
    }
}