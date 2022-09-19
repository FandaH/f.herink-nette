<?php

namespace App\Presenters;

final class HerinkPresenter extends BasePresenter
{
        
    public function actionDefault()
    {
        $this->template->title = "Herink:Default";
        
    }
    
    public function actionAdd()    
    {
        $this->template->title = "Herink:Add";
        
    }    
            
    public function actionEdit()    
    {
        $this->template->title = "Herink:Edit";
        
    }
            
    public function actionDetail()    
    {
        $this->template->title = "Herink:Detail";
        
    }  

    public function actionTest()
    {
        $this->template->title = "Herink:Test";
        
        $data = array("Houska","Rohlik","Banan");

        $this->template->data = $data;
    }
}

