<?php

namespace Modules\SpeedDial\Admin;

use Modules\Admin\Components\ModelAdmin;
use Modules\SpeedDial\Models\SpeedDial;

class SpeedDialAdmin extends ModelAdmin
{
	public function getModel()
	{
		return new SpeedDial;
	}
}