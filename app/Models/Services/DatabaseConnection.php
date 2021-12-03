<?php

namespace App\Models\Services;

use Nette\Bridges\DatabaseTracy\ConnectionPanel;
use Nette\Diagnostics\Debugger;
use Tracy\BlueScreen;

/**
 * Service Database
 */
class DatabaseConnection extends \Nette\Database\Connection
{
    /** @var \Nette\Security\User */
    private $loggedUser;

    /**
     *
     * @param type $dsn
     * @param type $username
     * @param type $password
     * @param array $options
     * @param type $driverClass
     */
    public function __construct($dsn, $username = NULL, $password  = NULL, array $options = NULL, $driverClass = NULL)
    {
        parent::__construct($dsn, $username, $password, $options, $driverClass);

        $panel = new ConnectionPanel($this, new BlueScreen());

        \Tracy\Debugger::getBar()->addPanel($panel);
    }

    public function setLoggedUser($loggedUser)
    {
        $this->loggedUser = $loggedUser;
    }

    public function getLoggedUser()
    {
        return $this->loggedUser;
    }

}
