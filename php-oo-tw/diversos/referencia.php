<?php

require_once '/home/nelynely/PhpstormProjects/php-oo-tw/src/Classes/Produto.php';

$prod1 = new Produto();
$prod1->titulo = "Skol";
$prod1->descricao = "Cerveja Pilsen";
$prod1->preco = 2.50;

//Apontam para o mesmo objeto
$prod2 = $prod1;
$prod2->titulo = "Itaipava";

$prod2 = 10;

var_dump($prod1, $prod2);

//Passagem por referencia
$prod3 = &$prod1;
$prod3->titulo = "Skol Fininha";

$prod3 = 20;

var_dump($prod1, $prod3);






