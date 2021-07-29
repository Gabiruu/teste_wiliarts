<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Endereco $endereco
 * @var \Cake\Collection\CollectionInterface|string[] $clientes
 */

?>

<div class="container-fluid mt-3">
    <div class="row content">
        <aside class="col-sm-3 sidenav">
            <div class="nav flex-column">
                <h4 class="heading"><?= __('Ações') ?></h4>
                <?= $this->Html->link(__('Listar Endereços'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            </div>
        </aside>
        <div class="col-sm-9">
            <div class="form-horizontal">
                <?= $this->Form->create($endereco) ?>
                <fieldset>
                    <legend><?= __('Adicionar endereço') ?></legend>
                    <?php
                    echo $this->Form->control('cliente_id', ['options' => $clientes]);
                    echo $this->Form->control('cep', ['id' => 'cep']);
                    echo $this->Form->control('logradouro');
                    echo $this->Form->control('bairro');
                    echo $this->Form->control('cidade');
                    echo $this->Form->control('estado');
                    echo $this->Form->control('numero', ['label' => 'Número']);
                    echo $this->Form->control('complemento');
                    ?>
                </fieldset>
                <?= $this->Form->button(__('Enviar'), ['class' => 'btn btn-success mt-3']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>