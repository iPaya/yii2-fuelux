<?php
/**
 * @link http://ipaya.cn/
 * @copyright Copyright (c) 2016 ipaya.cn
 * @license http://ipaya.cn/license/
 */

namespace iPaya\fuelUX;


use yii\web\AssetBundle;

class FuelUXAsset extends AssetBundle
{
    public $sourcePath = '@bower/fuelux/dist';
    public $css = [
        'css/fuelux.min.css'
    ];
    public $js = [
        'js/fuelux.js'
    ];
    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset',
        'iPaya\moment\MomentAsset',
    ];
}