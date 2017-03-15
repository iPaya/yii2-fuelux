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
        if ($this->model) {
            $input = Html::activeTextInput($this->model, $this->attribute, $this->options);
        } else {
            $input = Html::textInput($this->name, $this->value, $this->options);
        }

        return $this->render('date-picker', [
            'id' => $this->getId(),
            'input' => $input,
        ]);
    }
}
