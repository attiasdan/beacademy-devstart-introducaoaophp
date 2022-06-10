<?php

$arquivo = fopen('produtos.csv', 'a+'); //leitura e escrita

fwrite($arquivo, 'Alessandro'.PHP_EOL);
fwrite($arquivo, 'Bruno'.PHP_EOL);
fwrite($arquivo, 'Luiza'.PHP_EOL);

fclose($arquivo);