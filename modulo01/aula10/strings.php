<?php

$nome = 'alessandro'; //Alessandro
$sobrenome = 'FEITOZA'; //Feitoza

$nome2 = 'chiquim da silva'; //Chiquim Da Silva

$nome = ucfirst($nome);
$sobrenome = strtolower($sobrenome);
$sobrenome = ucfirst($sobrenome);

$nome2 = ucwords($nome2);

echo $nome . PHP_EOL;
echo $sobrenome . PHP_EOL;
echo $nome2 . PHP_EOL;