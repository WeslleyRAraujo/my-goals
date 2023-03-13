<?php

namespace MyGoals\Classes;

use Opis\ORM\EntityManager;
use Opis\Database\Connection;
use Opis\Database\Database;

class GlobalConnection
{
    private $ormConnection;
    private $ormDb;

    public function __construct()
    {   
        $connection = new Connection("pgsql:host=localhost;port=5432;dbname=my-goals;user=postgres;password=postgres", "postgres", "postgres");
        $this->ormConnection = new EntityManager($connection);

        $this->ormDb = new Database($connection);
    }

    public function getConnection() {
        return [$this->ormConnection, $this->ormDb];
    }
}