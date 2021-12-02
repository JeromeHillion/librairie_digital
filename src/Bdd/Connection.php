<?php

namespace App\Bdd;

use const App\Bdd\DB_HOST;
use const App\Bdd\DB_NAME;
use const App\Bdd\DB_PASSWORD;
use const App\Bdd\DB_USER;

require_once '../Bdd/Config.php';



class Connection
{

    protected  $pdo;
    protected string $host= DB_HOST;
    protected string $dbname= DB_NAME;
    protected string $user= DB_USER;
    protected string  $password= DB_PASSWORD;

    public   function getConnectionToBdd()
    {
        $this->pdo =  new \PDO("mysql:host=$this->host;dbname=$this->dbname", $this->user, $this->password);
        $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        return $this->pdo;
    }

}
