<?php
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">';

$url = $_SERVER['REQUEST_URI'];

match($url) {
    '/' => include './telas/home.php',
    '/login' => '<h1>Página de Login</h1>',
    '/cadastro' => '<h1>Página de Cadastro</h1>',
    default => '<h1>Página não encontrada</h1>',
};