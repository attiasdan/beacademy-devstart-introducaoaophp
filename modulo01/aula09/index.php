<?php
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">';
echo '<link rel="stylesheet" href="./styles/style.css">';

$url = $_SERVER['REQUEST_URI'];

echo '<div class="container">';

include './telas/menu.php';

match($url) {
    '/' => include './telas/home.php',
    '/login' => include './telas/login.php',
    '/cadastro' => include './telas/cadastro.php',
    default => include './telas/error404.php',
};
echo '</div>';