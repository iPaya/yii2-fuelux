<?php
/**
 * @link http://ipaya.cn/
 * @copyright Copyright (c) 2016 ipaya.cn
 * @license http://ipaya.cn/license/
 */

namespace iPayaUnit\fuelUX;


use iPaya\fuelUX\DatePicker;

class DatePickerTest extends TestCase
{
    public function testDatePicker()
    {
        $out = DatePicker::widget([
            'name' => 'test-date-picker'
        ]);

        static::assertContains('test-date-picker', $out);
    }
}
