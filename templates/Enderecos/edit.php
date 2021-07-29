<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Endereco $endereco
 * @var string[]|\Cake\Collection\CollectionInterface $clientes
 */
?>
<div class="container-fluid mt-3">
    <div class="row content">
        <aside class="col-sm-3 sidenav">
            <div class="nav flex-column">
                <h4 class="heading"><?= __('Ações') ?></h4>
                <?= $this->Form->postLink(
                    __('Deletar'),
                    ['action' => 'delete', $endereco->id],
                    ['confirm' => __('Você tem certeza que deseja deletar este endereço ?'), 'class' => 'side-nav-item']
                ) ?>
                <?= $this->Html->link(__('Listar Endereços'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            </div>
        </aside>

        <div class="col-sm-9">
            <div class="form-horizontal">
                <?= $this->Form->create($endereco) ?>
                <fieldset>
                    <legend><?= __('Editar Endereço') ?></legend>
                    <?php
                    echo $this->Form->control('cliente_id', ['options' => $clientes]);
                    echo $this->Form->control('cep');
                    echo $this->Form->control('logradouro');
                    echo $this->Form->control('numero', ['label' => 'Número']);
                    echo $this->Form->control('complemento');
                    echo $this->Form->control('bairro');
                    echo $this->Form->control('cidade');
                    echo $this->Form->control('estado');
                    ?>
                </fieldset>
                <?= $this->Form->button(__('Enviar'), ['class' => 'btn btn-success mt-3']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>