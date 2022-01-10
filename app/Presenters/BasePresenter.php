<?php

namespace App\Presenters;


use App\Models\Services\DatabaseConnection;
use App\Models\Services\ElasticSearch;
use Elasticsearch\Client;

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

    /**
     * @var Client
     */
    public $elasticClient;


    public function startup()
    {
        $this->elasticClient = $this->elasticSearch->getClient();

        $this->elasticClient->connect();
        die;
    }

}