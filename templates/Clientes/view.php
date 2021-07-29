<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<div class="container-fluid mt-3 ">
    <div class="row content">
        <aside class="col-sm-3 sidenav">
            <h4 class=""><?= __('Ações') ?></h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <?= $this->Html->link(__('Editar Cliente'), ['action' => 'edit', $cliente->id], ['class' => 'side-nav-item']) ?>
                </li>
                <li class="nav-item">
                    <?= $this->Form->postLink(__('Deletar Cliente'), ['action' => 'delete', $cliente->id], ['confirm' => __('Você tem certeza que deseja deletar  {0}?', $cliente->nome), 'class' => 'side-nav-item']) ?>
                </li>
                <li class="nav-item">
                    <?= $this->Html->link(__('Listar Clientes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
                </li>
                <li class="nav-item">
                    <?= $this->Html->link(__('Novo Cliente'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
                </li>
            </ul>
        </aside>
        <div class="col-sm-9">
            <div class="">
                <h3 class="text-center pt-3 mb-4"><?= h($cliente->nome) ?></h3>
                <table class="table ">
                    <tr>
                        <th><?= __('Nome') ?></th>
                        <td><?= h($cliente->nome) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Email') ?></th>
                        <td><?= h($cliente->email) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Telefone') ?></th>
                        <td><?= h($cliente->telefone) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Modificado') ?></th>
                        <td><?= h($cliente->created) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Criado') ?></th>
                        <td><?= h($cliente->modified) ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>