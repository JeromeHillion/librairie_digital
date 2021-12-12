<?php

namespace App\Repository;

use PDO;
use App\Bdd\Connection;

 class AuthorRepository
{

    protected Connection $connection;
    

    public function __construct()
    {
        $this->connection = new Connection();
    }

    public function findAuthorByName(string $name)
    {
        $pdo = $this->connection->getConnectionToBdd();

        $req = $pdo->prepare("SELECT * FROM `author` WHERE name= ?");
        $req->execute([$name]);
        $res = $req->fetch();

        if (!sizeOf($res)) {
            return [];
        }
        return $res;
    }
}
