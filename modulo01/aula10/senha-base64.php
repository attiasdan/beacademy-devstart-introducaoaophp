<?php

$senha = '123456';
$code =  base64_encode($senha);

//codificação antiga:
echo base64_encode($senha) . PHP_EOL;
echo base64_decode($code) . PHP_EOL;