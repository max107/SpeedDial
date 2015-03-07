<?php

namespace Modules\SpeedDial;

use Mindy\Base\Module;

class SpeedDialModule extends Module
{
	public function getMenu()
    {
        return [
            'name' => $this->getName(),
            'items' => [
                [
                    'name' => self::t('SpeedDial'),
                    'adminClass' => 'SpeedDialAdmin',
                ],
            ]
        ];
    }
}