<?php

namespace Modules\SpeedDial\Forms;

use Mindy\Forms\ModelForm;
use Modules\SpeedDial\Models\SpeedDial;

class SpeedDialForm extends ModelForm
{
	public function getModel()
	{
		return new SpeedDial;
	}
}