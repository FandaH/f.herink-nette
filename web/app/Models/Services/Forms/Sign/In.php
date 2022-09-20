<?php

namespace App\Models\Forms\Sign;

use Nette\Application\UI\Form;

class In extends Form
{

public $presenter;

public $name;

    /**
     * @param $presenter
     * @param $name
     */
    public function __construct($presenter, $name)
    {

        parent::__construct($presenter, $name);
$this->addCheckbox('sadsad', 'dsfdsf');

//        $forms = new Form;
//        $forms->addText('name', 'Name:');
//        $forms->addPassword('password', 'Password:');
//        $forms->addSubmit('send', 'Sign up');

    }


}



?>