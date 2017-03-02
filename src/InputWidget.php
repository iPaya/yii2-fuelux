<?php
/**
 * @link http://ipaya.cn/
 * @copyright Copyright (c) 2016 ipaya.cn
 * @license http://ipaya.cn/license/
 */

namespace iPaya\fuelUX;


use yii\helpers\Json;

class InputWidget extends \yii\bootstrap\InputWidget
{
    /**
     * Registers a specific FuelUX plugin and the related events
     * @param string $name the name of the FuelUX plugin
     */
    protected function registerPlugin($name)
    {
        $view = $this->getView();

        FuelUXAsset::register($view);

        $id = $this->getId();

        if ($this->clientOptions !== false) {
            $options = empty($this->clientOptions) ? '' : Json::htmlEncode($this->clientOptions);
            $js = "jQuery('#$id').$name($options);";
            $view->registerJs($js);
        }

        $this->registerClientEvents();
    }
}