<?php

$url = $_SERVER['REQUEST_URI'];

include './acoes.php';
include './telas/head.php';

match($url) {
    '/' => home(),
    '/login' => login(),
    '/cadastro' => cadastro(),
    '/listar' => listar(),
    '/relatorio' => relatorio(),
    default => erro404(),
};

include './telas/footer.php';