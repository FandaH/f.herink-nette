<?php

namespace App\Presenters;

use App\Models\Amateri;
use Nette\Application\UI\Presenter;

class AmateriPresenter extends Presenter
{
    public function actionDefault()
    {
        $data = new Amateri();

        $this->template->data = $data->getTopics();
    }

}
