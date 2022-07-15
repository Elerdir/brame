<?php

declare(strict_types=1);

namespace App\Presenters;

use Nette;


final class HomepagePresenter extends Nette\Application\UI\Presenter
{

	/** @var Nette\Database\Explorer @inject */
	public Nette\Database\Explorer $db;

	public function actionDefault()
	{
		$user = $this->db->table('user')->get(1);
	}
}
