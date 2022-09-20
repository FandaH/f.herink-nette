<?php

declare(strict_types=1);

namespace App\Presenters;

use App\Models\Forms\Sign\In;
use Nette;


final class RegisterPresenter extends BasePresenter
{

        public function actionDefault(){

    $this->template->form = new In($this, 'inForm');


}

}
