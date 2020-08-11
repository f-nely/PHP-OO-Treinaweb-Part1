<?php

namespace App\Email;

use App\Email\Adaptadores\Mailgun\Adaptador;

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

    public function m1()
    {
        $adaptador = new Adaptador;
    }

    public function m2()
    {
        $adaptador = new Adaptador;
    }
}

function valida(string $email): void
{
    echo "O endereço $email é valido: ";
}