<?php

namespace App\Models\Services;


use Contributte\Elastica\Client;

class ElasticSearch
{

    /** @var Client */
    private $elasticaClient;

    public function __construct(Client $elastica)
    {
        $this->elasticaClient = $elastica;
    }

}