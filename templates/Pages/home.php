<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

?>
<!DOCTYPE html>
<html>

<body>
    <!-- Second Container -->
    <div class="container-fluid bg-2 text-center main-container mt-5">
        <h3 class="display-3 margin pt-5 pb-3">CadCli</h3>
        <p class="txt-home">CadCli é um sistema de cadastro de cliente e seu respectivos endereços</p>
        <a href="<?= $this->Url->build('/clientes') ?>" class=" btn btn-primary btn-lg">
            Começar
        </a>
    </div>

</html>