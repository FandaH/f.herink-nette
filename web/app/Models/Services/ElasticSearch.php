<?php

namespace App\Models\Services;



use Elastica\Client;

class ElasticSearch
{

    /** @var \Contributte\Elastica\Client */
    private $elasticaClient;

    public function __construct(Client $elastica)
    {
        $this->elasticaClient = $elastica;
    }


    public function getClient(){
        return $this->elasticaClient;
    }

}