<?php

namespace App\Repository;

use App\Bdd\Connection;
use App\Entity\Book;
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
        $req = $pdo->prepare("SELECT book.id, book.isbn, book.name, category.name AS category, author.name AS author , book.cover, book.publication, book.summary FROM `book` LEFT JOIN category ON category.id = book.category_id
        LEFT JOIN author ON author.id = book.author_id;");
        $req->execute();
        $res = $req->fetchAll(PDO::FETCH_ASSOC);

        return $res;
    }

    public function save($isbn,$cover,$name,$publication,$summary,$category_id,$author_id )

    {
 
            $pdo = $this->connection->getConnectionToBdd();

            $req = $pdo->prepare("INSERT INTO `book` (isbn,cover,name,publication,summary,category_id,author_id) VALUES(:isbn,:cover,:name,:publication,:summary,:category_id,:author_id)");
            $req->bindValue("isbn",ucfirst($isbn) );
            $req->bindValue("cover",$cover);
            $req->bindValue("name",ucfirst($name));
            $req->bindValue("publication",ucfirst($publication));
            $req->bindValue("summary",ucfirst($summary));
            $req->bindValue("category_id",$category_id);
            $req->bindValue("author_id",$author_id);
            $req->execute();
       
    }

    public function findByName(string $name)
    {
        $pdo = $this->connection->getConnectionToBdd();

        $req = $pdo->prepare("SELECT * FROM `book` WHERE name = ?");
        $req->execute([$name]);
        $res = $req->fetch(PDO::FETCH_ASSOC);


        return $res;
    }

    public function findCategoryByid(int $id)
    {
        $pdo = $this->connection->getConnectionToBdd();

        $req = $pdo->prepare("SELECT * FROM `category` WHERE name = ?");
        $req->execute([$id]);
        $res = $req->fetch();

        if (!sizeOf($res)) {
            return null;
           
        }
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
