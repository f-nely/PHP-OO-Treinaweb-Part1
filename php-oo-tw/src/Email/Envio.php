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

        //namespace global
        $obj = new \stdClass();

        $customer = new \Cliente();

        var_dump($adaptador, $transporte, $obj, $customer);
    }
}

function valida(string $email): void
{
    echo "O endereço $email é valido: ";
}