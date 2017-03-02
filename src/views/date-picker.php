<?php
/**
 * @link http://ipaya.cn/
 * @copyright Copyright (c) 2016 ipaya.cn
 * @license http://ipaya.cn/license/
 */

/**
 * @var $input string
 * @var $id string
 */
?>
<div class="datepicker" id="<?= $id ?>">
    <div class="input-group">
        <?= $input ?>
        <div class="input-group-btn">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <span class="glyphicon glyphicon-calendar"></span>
                <span class="sr-only">Toggle Calendar</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right datepicker-calendar-wrapper" role="menu">
                <div class="datepicker-calendar">
                    <div class="datepicker-calendar-header">
                        <button type="button" class="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">上月</span>
                        </button>
                        <button type="button" class="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">下月</span>
                        </button>
                        <button type="button" class="title">
                            <span class="month">
                                <?php for ($i = 0; $i < 12; $i++): ?>
                                    <span data-month="<?= $i ?>">
                                        <?= $i + 1 ?> 月
                                    </span>
                                <?php endfor; ?>
                            </span>
                            <span class="year"></span>
                        </button>
                    </div>
                    <table class="datepicker-calendar-days">
                        <thead>
                        <tr>
                            <th>日</th>
                            <th>一</th>
                            <th>二</th>
                            <th>三</th>
                            <th>四</th>
                            <th>五</th>
                            <th>六</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <div class="datepicker-calendar-footer">
                        <button type="button" class="datepicker-today">今天</button>
                    </div>
                </div>
                <div class="datepicker-wheels" aria-hidden="true">
                    <div class="datepicker-wheels-month">
                        <h2 class="header">月份</h2>
                        <ul>
                            <?php for ($i = 0; $i < 12; $i++): ?>
                                <li data-month="<?= $i ?>">
                                    <button type="button"><?= $i + 1 ?> 月</button>
                                </li>
                            <?php endfor; ?>
                        </ul>
                    </div>
                    <div class="datepicker-wheels-year">
                        <h2 class="header">年份</h2>
                        <ul></ul>
                    </div>
                    <div class="datepicker-wheels-footer clearfix">
                        <button type="button" class="btn datepicker-wheels-back">
                            <span class="glyphicon glyphicon-arrow-left"></span>
                            <span class="sr-only">返回日历</span>
                        </button>
                        <button type="button" class="btn datepicker-wheels-select">
                            选择 <span class="sr-only">年月</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
