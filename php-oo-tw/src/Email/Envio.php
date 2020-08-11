<?php

namespace App\Email;

const VERSION = 1.0;

class Envio
{
    public function envia(): void
    {
        //namaspace completo
        $adaptador = new \App\Email\Adaptadores\Mailgun\Adaptador;
        var_dump($adaptador);
    }
}

function valida(string $email): void
{
    echo "O endereço $email é valido: ";
}