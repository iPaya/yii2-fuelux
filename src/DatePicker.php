<?php
/**
 * @link http://ipaya.cn/
 * @copyright Copyright (c) 2016 ipaya.cn
 * @license http://ipaya.cn/license/
 */

namespace iPaya\fuelUX;


use yii\helpers\Html;

class DatePicker extends InputWidget
{

    public function init()
    {
        parent::init();
        Html::addCssClass($this->options, 'form-control');
    }

    public function run()
    {
        $this->registerPlugin('datepicker');
        $input = Html::activeTextInput($this->model, $this->attribute, $this->options);

        return $this->render('date-picker', [
            'id' => $this->getId(),
            'input' => $input,
        ]);
    }
}