<?php

namespace App\Models\Forms\Sign;

use Nette\Application\UI\Form;


class In extends Forms
{
    protected function createComponentRegistrationForm(): Form
    {
        $form = new Form;
        $form->addText('name', 'Name:');
        $form->addPassword('password', 'Password:');
        $form->addSubmit('send', 'Sign up');
        $form->onSuccess[] = [$this, 'formSucceeded'];
        return $form;
    }

    public function formSucceeded(Form $form, $data): void
    {
        // here we will process the data sent by the form
        // $data->name contains name
        // $data->password contains password
        $this->flashMessage('You have successfully signed up.');
        $this->redirect('Homepage:');
    }
}
?>

