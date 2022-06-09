<?php 
declare(strict_types=1);

function mostrarNome(array $nomes): void
{
    foreach ($nomes as $cadaNome) {
        echo "Nome: " . $cadaNome . PHP_EOL;
    }
}
?>