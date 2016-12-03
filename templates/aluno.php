<?php
// Define o layout onde este conteúdo será exibido
$this->layout('layout', ['titulo' => 'Aluno']);
?>

<div class="container">
    <div class="col-sm-offset-0 col-sm-13">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <h1><?=$this->e($descricao)?></h1>
                </div>
            </div>
        </nav>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Matrícula</th>
                    <th>Endereço</th>
                    <th>Observação</th>
                    <th>Opções</th>
                </tr>
                </thead>
                <tbody>
                    <?php
                        // Percorre o array de alunos recebido do Controller
                        // A cada aluno percorrido, imprime os dados do aluno em formato de tabela
                        foreach($alunos as $aluno) :
                    ?>
                        <tr>
                            <td><?= $aluno->getNome() ?></td>
                            <td><?= $aluno->getCpf() ?></td>
                            <td><?= $aluno->getMatricula() ?></td>
                            <td><?= $aluno->getEndereco() ?></td>
                            <td><?= $aluno->getObservacao() ?></td>
                            <td>
                                <a class="btn btn-primary btn-xs btn-detail"
                                   href="<?= HOME ?>/aluno/<?= $aluno->getId() ?>/editar">Editar</a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>