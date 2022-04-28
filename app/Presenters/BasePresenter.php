<?php

namespace App\Presenters;


use App\Models\Services\DatabaseConnection;
use App\Models\Services\ElasticSearch;
use Elasticsearch\Client;

class BasePresenter extends \Nette\Application\UI\Presenter
{

    /**
     * @var \App\Models\Services\DatabaseConnection
     * @inject
     */
public $database;

    public function actionDefault(){

/*$data = $this->database->getPdo()->query('SELECT * FROM pokus')->fetchAll();
dump($data);
die;
   */ }

}