<?php

$mes = 9;

echo match ($mes) {
    1 => 'Janeiro',
    2 => 'Fevereiro',
    9 => 'Setembro',
    default => 'Mes invalido'
};

?>