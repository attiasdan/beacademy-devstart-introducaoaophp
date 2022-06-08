<?php

$bandas = [
    ['Dream theater', 5],
    ['Iron Maiden', 10],
    ['Neo Pi Neo', 1]
];

echo $bandas[0][0];
echo '<table>';

foreach ($bandas as $cadaBanda) {
    echo "<tr>{$cadaBanda}</tr>";
}

echo '</table>';
?>
