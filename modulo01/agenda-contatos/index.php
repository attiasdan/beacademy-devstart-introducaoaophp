<?php

$url = explode('?', $_SERVER['REQUEST_URI']);

include './acoes.php';
include './telas/head.php';

match($url[0]) {
    '/' => home(),
    '/login' => login(),
    '/cadastro' => cadastro(),
    '/listar' => listar(),
    '/relatorio' => relatorio(),
    '/excluir' => excluir(),
    '/editar' => editar(),
    default => erro404(),
};

include './telas/footer.php';