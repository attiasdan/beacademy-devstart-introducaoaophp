<?php

$bandas = [
    'Dream theater',
    'Neo Pi Neo',
    'ExaltaSamba'
];

echo '<ul>';
for ($n = 0; $n <= 2; $n++)
    echo '<li>' . $bandas[$n] . '</li>';
echo '</ul>';

foreach ($bandas as $cadaBanda) {
    echo "<li>{$cadaBanda}</li>";
}
?>
