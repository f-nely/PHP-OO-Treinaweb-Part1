<?php

namespace App\Email;

const VERSION = 1.0;

class Envio
{
    public function envia(): void
    {
        //namaspace relativo
        $adaptador = new Adaptadores\Mailgun\Adaptador;

        $transporte = new Transporte();

        var_dump($adaptador, $transporte);
    }
}

function valida(string $email): void
{
    echo "O endereço $email é valido: ";
}