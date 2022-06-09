<?php

$a1 = [
    'nome' => 'Chiquim',
    'email' => 'chiquim@email.com',
    'telefone' => '85 9 8889-0000',
    'notas' => [
        9,
        8.5,
        7.5,
        6
    ]
];
$a2 = [
    'nome' => 'Maria',
    'email' => 'maria@email.com',
    'telefone' => '85 9 8459-0000',
    'notas' => [
        8,
        8.5,
        7.5,
        8
    ]
];
$alunos = [
    $a1,
    $a2,
];

//var_dump($alunos);
?>
<table border="1">
    <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
            <th colspan="4">Notas</th>
        </tr>
    </thead>
    <tbody>
        
        <?php
            foreach($alunos as $aluno) {
                echo "<tr>
                        <td>" . $aluno['nome'] . "</td>
                        <td>" . $aluno['email'] . "</td>
                        <td>" . $aluno['telefone'] . "</td>
                        <td>" . $aluno['notas'][0] . "</td>
                        <td>" . $aluno['notas'][1] . "</td>
                        <td>" . $aluno['notas'][2] . "</td>
                        <td>" . $aluno['notas'][3] . "</td>
                    </tr>";
            }
        ?>
    </tbody>
</table>