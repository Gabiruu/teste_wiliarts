<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<div class="container-fluid mt-3">
    <div class="row content">
        <aside class="col-sm-3 sidenav">
            <div class="nav flex-column">
                <h4 class="heading"><?= __('Ações') ?></h4>
                <?= $this->Html->link(__('Listar Clientes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            </div>
        </aside>
        <div class="col-sm-9">
            <div class="form-horizontal">
                <?= $this->Form->create($cliente) ?>
                <fieldset>
                    <legend><?= __('Adicionar Cliente') ?></legend>
                    <?php
                    echo $this->Form->control('nome');
                    ?>
                    <?php
                    echo $this->Form->control('email');
                    echo $this->Form->control('telefone');
                    ?>
                </fieldset>
                <?= $this->Form->button(__('Enviar'), ['class' => 'btn btn-success mt-3']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>