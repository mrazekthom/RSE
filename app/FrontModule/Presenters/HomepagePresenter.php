<?php

namespace App\FrontModule\Presenters;

/**
 * Homepage presenter.
 */
class HomepagePresenter extends BaseFrontPresenter
{

	public function renderDefault()
	{
		$this->template->anyVariable = 'any value';
	}

}
