<?php
/**
 * @link http://ipaya.cn/
 * @copyright Copyright (c) 2016 ipaya.cn
 * @license http://ipaya.cn/license/
 */

namespace iPayaUnit\fuelUX;


use iPaya\fuelUX\ComboBox;

class CombBoxTest extends TestCase
{
    public function testCombBox()
    {
        $out = ComboBox::widget([
            'name' => 'test-combo-box',
            'items' => [
                'value-1' => 'label-1',
                'value-2' => 'label-2'
            ]
        ]);

        static::assertContains('test-combo-box', $out);
        static::assertContains('label-1', $out);
        static::assertContains('label-2', $out);
    }
}
