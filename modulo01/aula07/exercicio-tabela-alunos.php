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

?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<div class="container">
    <h1 class="mt-5">Alunos</h1>
    <hr>
    <table class="table table-hover table-striped mt-5">
        <thead class="table-dark">
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
</div>