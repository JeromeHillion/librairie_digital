<?php

namespace App\Repository;

use App\Bdd\Connection;

class BookRepository
{

    protected Connection $connection;

    public function __construct()
    {
        $this->connection = new Connection();
    }

    public function save($book)
    {
        $found = $this->findByid($book->getId());

        if(!$found)
        {
            echo 'Le livre n\'existe pas !';
        }
    }

    public function findById($id)
    {
        $pdo = $this->connection->getConnectionToBdd();

        $req = $pdo->prepare("SELECT * INTO `BOOK` WHERE id = ?");
        $req->execute([$id]);
        $res = $req->fetch();

        return $res;
    }
}
