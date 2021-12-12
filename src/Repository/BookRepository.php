<?php

namespace App\Repository;

use App\Bdd\Connection;
use PDO;

class BookRepository
{

    protected Connection $connection;

    public function __construct()
    {
        $this->connection = new Connection();
    }

    public function getBooks()
    {
        $pdo = $this->connection->getConnectionToBdd();
        $req = $pdo->prepare("SELECT * INTO `book`");
        $res = $req->fetchAll(PDO::FETCH_ASSOC);

        return $res;
    }

    public function save($book)
    {
        $found = $this->findByid($book->getId());
        
        if(!$found)
        {
            $pdo = $this->connection->getConnectionToBdd();

            $categoryFound = $this->findCategoryById($book->getCategoryId());
            $authorFound = $this->findAuthoryById($book->getAuthorId());


        }
    }

    public function findById(int $id)
    {
        $pdo = $this->connection->getConnectionToBdd();

        $req = $pdo->prepare("SELECT * INTO `book` WHERE id = ?");
        $req->execute([$id]);
        $res = $req->fetch();

        return $res;
    }

    public function findCategoryByid(int $id)
    {
        $pdo = $this->connection->getConnectionToBdd();

        $req = $pdo->prepare("SELECT * INTO `category` WHERE name = ?");
        $req->execute([$id]);
        $res = $req->fetch();

        return $res;
    }

    public function findAuthoryByid(int $id)
    {
        $pdo = $this->connection->getConnectionToBdd();

        $req = $pdo->prepare("SELECT * INTO `author` WHERE name = ?");
        $req->execute([$id]);
        $res = $req->fetch();

        return $res;
    }
}
