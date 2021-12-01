<?php

namespace App\Presenters;

use App\Models\Title;
use Nette\Application\UI\Presenter;

class ElektronikaPresenter extends Presenter

{



    public function actionAdd()
    {
        $this->template->add = Title::getAdd();

    }

    public function actionDelete()
    {
        $this->template->delete = Title::getDelete();
    }

    public function actionEdit()
    {
        $this->template->edit = Title::getEdit();
    }

    public function actionDefault()
    {
        $this->template->default = Title::getDefault();
    }


}