<?php

namespace Modules\SpeedDial\Controllers;

use Modules\Core\Controllers\CoreController;
use Mindy\Base\Mindy;
use Mindy\Pagination\Pagination;
use Modules\SpeedDial\Models\SpeedDial;

class SpeedDialController extends CoreController
{
	public function actionIndex()
	{
		$user = Mindy::app()->user;
		if ($user->isGuest) {
			echo $this->render("speeddial/start.html");
		} else {
			$qs = SpeedDial::objects()->filter(['user' => $user]);
			$pager = new Pagination($qs);
			echo $this->render("speeddial/index.html", [
				'models' => $pager->paginate(),
			]);
		}
	}
}