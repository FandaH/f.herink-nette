<?php

namespace App\Presenters;


use App\Models\Services\DatabaseConnection;
use App\Models\Services\ElasticSearch;

class BasePresenter extends \Nette\Application\UI\Presenter
{

    /**
     * @var ElasticSearch @inject
     */
    public $elasticSearch;

    /**
     * @var DatabaseConnection @inject
     */
    public $database;

}