<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente[]|\Cake\Collection\CollectionInterface $clientes
 */
?>
<div class="clientes index content">
    <?= $this->Html->link(__('Novo Cliente'), ['action' => 'add'], ['class' => ' btn btn-success float-right']) ?>
    <h3 class="mt-4 mb-3"><?= __('Clientes') ?></h3>
    <div class="container-fluid">
        <table class="table ">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('telefone') ?></th>
                    <th scope="col" class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientes as $cliente) : ?>
                    <tr>
                        <td><?= h($cliente->nome) ?></td>
                        <td><?= h($cliente->email) ?></td>
                        <td><?= h($cliente->telefone) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Ver'), ['action' => 'view', $cliente->id], ['class' => 'btn btn-success']) ?>

                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $cliente->id],  ['class' => 'btn btn-warning']) ?>
                            <span class="btn btn-danger">
                                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $cliente->id], ['confirm' => __('Você tem certeza que deseja deletar {0}?', $cliente->nome)]) ?>
                            </span>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <div class="col-3 text-left">
                <?= $this->Paginator->first('<< ' . __('Primeira')) ?>
                <?= $this->Paginator->prev('< ' . __('Última')) ?>
                <?= $this->Paginator->numbers() ?>
            </div>
            <div class="col-6">
                <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, Mostrando {{current}} Registros de um total de {{count}} registros')) ?></p>
            </div>
            <div class="col-3 text-right">
                <?= $this->Paginator->next(__('Próxima') . ' >') ?>
                <?= $this->Paginator->last(__('Anterior') . ' >>') ?>
            </div>
        </ul>
    </div>
</div>