<?php
/**
 * @link http://ipaya.cn/
 * @copyright Copyright (c) 2016 ipaya.cn
 * @license http://ipaya.cn/license/
 */

namespace iPaya\fuelUX;


use yii\helpers\Html;

class ComboBox extends InputWidget
{
    public $autoResizeMenu = true;

    /**
     * e.g.
     * $items = [
     *     'value1' => 'label1',
     *     'value2' => 'label2'
     * ];
     * @var array
     */
    public $items = [];


    public function init()
    {
        parent::init();
        Html::addCssClass($this->options, 'form-control');
        $this->clientOptions['autoResizeMenu'] = $this->autoResizeMenu;
    }

    public function run()
    {
        $this->registerPlugin('combobox');
        $input = Html::activeTextInput($this->model, $this->attribute, $this->options);
        $items = $this->normalizeItems($this->items);

        return $this->render('combo-box', [
            'id' => $this->getId(),
            'input' => $input,
            'items' => $items,
        ]);
    }

    /**
     * @param array $items
     * @return array
     */
    public function normalizeItems($items)
    {
        $result = [];
        foreach ($items as $value => $label) {
            $result[] = [
                'label' => $label,
                'url' => '#',
                'options' => [
                    'data-value' => $value
                ]
            ];
        }
        return $result;
    }
}