<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Endereco[]|\Cake\Collection\CollectionInterface $enderecos
 */
?>
<div class="enderecos index content">
    <?= $this->Html->link(__('Novo endereço'), ['action' => 'add'], ['class' => ' btn btn-success float-right']) ?>
    <h3 class="mt-4 mb-3"><?= __('Endereços') ?></h3>
    <div class="container-fluid">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('cliente_id') ?></th>
                    <!--<th scope="col"><? //= $this->Paginator->sort('cep') 
                                        ?></th>-->
                    <th scope="col"><?= $this->Paginator->sort('logradouro') ?></th>
                    <!--<th scope="col"><? //= $this->Paginator->sort('número') 
                                        ?></th>-->
                    <!--<th scope="col"><? //= $this->Paginator->sort('complemento') 
                                        ?></th>-->
                    <th scope="col"><?= $this->Paginator->sort('bairro') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('cidade') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('estado') ?></th>

                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($enderecos as $endereco) : ?>
                    <tr>
                        <td><?= $endereco->has('cliente') ? $this->Html->link($endereco->cliente->nome, ['controller' => 'Clientes', 'action' => 'view', $endereco->cliente->id]) : '' ?></td>
                        <!--<td><? //= h($endereco->cep) 
                                ?></td>-->
                        <td><?= h($endereco->logradouro) ?></td>
                        <!--<td><? //= $this->Number->format($endereco->numero) 
                                ?></td>-->
                        <!--<td><? //= h($endereco->complemento) 
                                ?></td>-->
                        <td><?= h($endereco->bairro) ?></td>
                        <td><?= h($endereco->cidade) ?></td>
                        <td><?= h($endereco->estado) ?></td>

                        <td class="actions">
                            <?= $this->Html->link(__('Ver'), ['action' => 'view', $endereco->id], ['class' => 'btn btn-success']) ?>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $endereco->id], ['class' => 'btn btn-warning']) ?>
                            <span class="btn btn-danger ">
                                <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $endereco->id], ['confirm' => __('Você tem certeza que deseja deletar este endereço ?')]) ?>
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