<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CadCli';
?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <!--//$this->Html->css(['main', 'normalize.min', 'milligram.min', 'cake', 'bootstrap.min']) -->

    <?= $this->Html->css(['bootstrap.min', 'main', 'cake']) ?>
    <?= $this->Html->script(['jquery', 'main', 'bootstrap.min']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="<?= $this->Url->build('/') ?>">
                <img src="http://www.auxvida.com.br/wp-content/uploads/2017/03/MEU-CADASTRO.png" width="40" height="40" class="d-inline-block align-top" alt="">
                <a class="link-menu" href="<?= $this->Url->build('/') ?>"><span>Cad</span>Cli</a>
            </a>

            <div class="collapse navbar-collapse float-right" id="navbarSupportedContent">
                <ul class="navbar-nav float-right">
                    <li class="nav-item active">
                        <a class="nav-link link-menu" href="<?= $this->Url->build('/clientes') ?>">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-menu" href="<?= $this->Url->build('/enderecos') ?>">Endereços</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>

</html>