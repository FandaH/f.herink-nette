<?php

namespace App\Presenters;

use App\Models\forms\StiznostForm;
use Nette\Application\UI\Presenter;

class StiznostPresenter extends Presenter
{
    public function actionDefault(){
        $this->template->title = "Default";
$this->template->form= new StiznostForm($this, "StiznostForm");
    }

    public function actionEdit(){
        $this->template->title = "Edit";

    }
    public function actionAdd(){
        $this->template->title = "Add";

    }
}