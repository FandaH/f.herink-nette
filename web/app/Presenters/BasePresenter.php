<?php

namespace App\Presenters;


use App\Models\Services\DatabaseConnection;
use App\Models\Services\ElasticSearch;
use Elasticsearch\Client;

class BasePresenter extends \Nette\Application\UI\Presenter
{

    public $layout = "sbadminforms";

    public function startup() {

    parent::startup();


        
    $this->setLayout($this->layout);
    $this->template->layout = $this->getLayout();


    }

   

}








