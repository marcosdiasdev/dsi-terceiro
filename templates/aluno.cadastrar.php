<?php
// Define o layout onde este conteúdo será exibido
$this->layout('layout', ['titulo' => 'Aluno']);
?>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><?=$this->e($descricao)?></div>
                <div class="panel-body">


                    <form action="<?= HOME ?>/aluno" method="post" class="form-horizontal">
                        <div class="form-group">
                            <label for="nome" class="col-md-4 control-label">Nome:</label>
                            <div class="col-md-6">
                                <input type="text" id="nome" name="nome" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cpf" class="col-md-4 control-label">CPF:</label>
                            <div class="col-md-6">
                                <input type="text" id="cpf" name="cpf" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="telefone" class="col-md-4 control-label">Telefone:</label>
                            <div class="col-md-6">
                                <input type="text" id="telefone" name="telefone" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input type="submit" value="Cadastrar" class="btn btn-primary">
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>