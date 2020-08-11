<?php

require_once '../src/Email/Adaptadores/Mailgun/Adaptador.php';
require_once '../src/Email/Envio.php';

$email = new \App\Email\Envio();

$email->envia();

var_dump($email);