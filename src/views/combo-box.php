<?php
/**
 * @link http://ipaya.cn/
 * @copyright Copyright (c) 2016 ipaya.cn
 * @license http://ipaya.cn/license/
 */

use yii\bootstrap\Dropdown;

/**
 * @var $id string
 * @var $input string
 * @var $items array
 */
?>
<div class="input-group input-append dropdown combobox" id="<?= $id ?>">
    <?= $input ?>
    <div class="input-group-btn">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            <span class="caret"></span>
        </button>
        <?= Dropdown::widget([
            'options' => [
                'class' => 'dropdown-menu-right'
            ],
            'items' => $items,
        ]);
        ?>
    </div>
</div>
