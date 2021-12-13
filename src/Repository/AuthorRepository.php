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

    public function save(string $name)
    {
        $found = $this->findAuthorByName(ucfirst($name));

        if (!$found) {
            $pdo = $this->connection->getConnectionToBdd();
        $req = $pdo->prepare("INSERT INTO author(name) VALUES(:name)");
        $req->bindValue("name", ucfirst($name));
        $req->execute();
    }
        }
       

    public function findAuthorByName(string $name)
    {
        $pdo = $this->connection->getConnectionToBdd();

        $req = $pdo->prepare("SELECT * FROM `author` WHERE name= ?");
        $req->execute([$name]);
        $res = $req->fetch();

        if (!sizeOf($res)) {
            return null;
        }
        return $res;
    }
}
