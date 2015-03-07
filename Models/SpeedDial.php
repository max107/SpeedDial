<?php

namespace Modules\SpeedDial\Models;

use Modules\SpeedDial\SpeedDialModule;
use Mindy\Orm\Model;
use Mindy\Orm\Fields\CharField;
use Mindy\Orm\Fields\ForeignField;
use Modules\User\Models\User;

class SpeedDial extends Model
{
	public static function getFields()
	{
		return [
			'name' => [
				'class' => CharField::className(),
				'verboseName' => SpeedDialModule::t('name')
			],
			'url' => [
				'class' => CharField::className(),
				'verboseName' => SpeedDialModule::t('Url')
			],
			'user' => [
				'class' => ForeignField::className(),
				'verboseName' => SpeedDialModule::t('User'),
				'modelClass' => User::className(),
			]
		];
	}

	public function __toString()
	{
		return (string)$this->name;
	}
}