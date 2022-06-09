<?php

$produtos = [
    [
        'nome' => 'Optimus Prime',
        'preco' => 'R$ 1 000 000',
        'descricao' => 'Optimus Prime se transforma em um caminhão Peterbilit e é o líder dos Autobots',
        'foto' => './img/optimus.bmp'
    ],
    [
        'nome' => 'Ironhide',
        'preco' => 'R$ 800 000',
        'descricao' => 'Ironhide é uma Pick-up modelo GMC Topkick; [Perito em canhões]',
        'foto' => './img/ironhide.bmp'
    ],
    [
        'nome' => 'Bumblebee',
        'preco' => 'R$ 900 000',
        'descricao' => 'Bumblebee é um modelo Chevrolet Camaro; [ Espião de Optimus Prime- Amigo/guardião de Spike/Sam Witwicky]',
        'foto' => './img/bumblebee.bmp'
    ],
    [
        'nome' => 'Ratchet',
        'preco' => 'R$ 600 000',
        'descricao' => 'Ratchet assume a formalo utilitário Hummer H2 de busca e salvamento;[ Médico Dos Autobots]',
        'foto' => './img/ratchet.bmp'
    ]
];

?>
<h1>Listar Contato</h1>
<hr>
<table class="table table-hover table-striped mt-5">
    <thead class="table-dark">
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
        </tr>
    </thead>
    <tbody>
        
        <?php
            foreach($produtos as $produto) {
                echo "<tr>
                        <td>" . $produto['nome'] . "</td>
                        <td>" . $produto['preco'] . "</td>
                        <td>" . $produto['descricao'] . "</td>
                    </tr>";
            }
        ?>
    </tbody>
</table>