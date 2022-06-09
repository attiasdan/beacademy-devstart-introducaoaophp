<?php

declare(strict_types=1);

$notasCursoA = [
    10,
    9,
    9.5,
    7,
];
$notasCursoB = [
    10,
    9,
    9.5,
    7,
];

// function mediaDeNotas(array $notas): float
// {
//     $total = 0;
//     $quantidade = 0;

//     foreach ($notas as $cadaNota) {
//         $total += $cadaNota;
//         $quantidade++;
//     }

//     return $total / $quantidade;
// }
function mediaDeNotas(array $notas): float
{
    return array_sum($notas) / count($notas);
}
echo mediaDeNotas($notasCursoA);