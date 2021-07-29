<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Endereco $endereco
 */
?>
<div class="container-fluid mt-3 ">
    <div class="row content">
        <aside class="col-sm-3 sidenav">
            <h4 class=""><?= __('Ações') ?></h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <?= $this->Html->link(__('Editar Endereço'), ['action' => 'edit', $endereco->id], ['class' => 'side-nav-item']) ?>
                </li>
                <li class="nav-item">
                    <?= $this->Form->postLink(__('Deletar Endereço'), ['action' => 'delete', $endereco->id], ['confirm' => __('Você tem certeza que deseja deletar este endereço ?'), 'class' => 'side-nav-item']) ?>
                </li>
                <li class="nav-item">
                    <?= $this->Html->link(__('Listar Endereços'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
                </li>
                <li class="nav-item">
                    <?= $this->Html->link(__('Novo Endereço'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
                </li>
            </ul>
        </aside>
        <div class="col-sm-9">
            <div class="">
                <table class="table ">
                    <tr>
                        <th class="col-6"><?= __('Cliente') ?></th>
                        <td class="col-6"><?= $endereco->has('cliente') ? $this->Html->link($endereco->cliente->nome, ['controller' => 'Clientes', 'action' => 'view', $endereco->cliente->id]) : '' ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Cep') ?></th>
                        <td><?= h($endereco->cep) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Logradouro') ?></th>
                        <td><?= h($endereco->logradouro) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Complemento') ?></th>
                        <td><?= h($endereco->complemento) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Bairro') ?></th>
                        <td><?= h($endereco->bairro) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Cidade') ?></th>
                        <td><?= h($endereco->cidade) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Estado') ?></th>
                        <td><?= h($endereco->estado) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Número') ?></th>
                        <td><?= $this->Number->format($endereco->numero) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Criado') ?></th>
                        <td><?= h($endereco->created) ?></td>
                    </tr>
                    <tr>
                        <th><?= __('Modificado') ?></th>
                        <td><?= h($endereco->modified) ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>