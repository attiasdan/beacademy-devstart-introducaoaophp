<?php

declare(strict_types=1);

function soma(float $n1, float $n2) {
    return $n1 + $n2;
}

function welcome(string $nome) {
    return "Bem vindo {$nome}";
}

echo soma(10, 20);

echo PHP_EOL . '----------------' . PHP_EOL;

echo soma(10, 90);

echo welcome("Daniel");

?>