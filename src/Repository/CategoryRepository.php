<?php

namespace App\Repository;

use PDO;
use App\Bdd\Connection;
use App\Entity\Category;

use App\Manager\ApiManager;
use const App\Bdd\T_CATEGORY;

class CategoryRepository
{

    protected Connection $connection;
    

    public function __construct()
    {
        $this->connection = new Connection();
    }


    public function save(string $name)
    {
        $found = $this->findCategoryByName($name);

        if (!$found)
        {
            //Si la catégorie n'existe pas on l'ajoute
            $pdo = $this->connection->getConnectionToBdd();
            $req = $pdo->prepare("INSERT INTO `category` (name) VALUES(:name)");

            $req->bindValue(':name', ucfirst($name));

            $req->execute();
        }
    }

    public function delete(int $id)
    {
       
        $pdo = $this->connection->getConnectionToBdd();
        $req= $pdo->prepare("DELETE FROM category WHERE id = :id");
        $req->bindParam(':id', $id, PDO::PARAM_INT);
        $req->execute();
    }

    public function findCategoryById(int $id)
    {
        $pdo = $this->connection->getConnectionToBdd();

        $req = $pdo->prepare("SELECT * FROM `category` WHERE id= ?");
        $req->execute([$id]);
        $res = $req->fetch();

        return $res;
    }

    public function findCategoryByName(string $name)
    {
        $pdo = $this->connection->getConnectionToBdd();

        $req = $pdo->prepare("SELECT * FROM `category` WHERE name= ?");
        $req->execute([$name]);
        $res = $req->fetch();

        return $res;
    }
    public function getCategories()
    {

        $pdo = $this->connection->getConnectionToBdd();

        $req = $pdo->prepare("SELECT * FROM `category`");
        $req->execute();
        $res = $req->fetchAll(PDO::FETCH_ASSOC);

        return $res;
    }

    
    

    /*  public  function saveCategoryToJson()
    { */
    //On récupère les données du JSON
    /* $apiManager = new ApiManager;
        $dataApi = $apiManager->getJsonFile();

        $arrCategories = [];
        $data_category = null; */

    //On boucle pour récupérer les catrégories
    /* foreach ($dataApi as $data) {
            if (!in_array($data->category->name, $arrCategories)) {
                $data_category = $data->category->name;
                array_push($arrCategories, $data_category);
            }
        }
        $categoryToAdd = [];

        if (!empty($arrCategories)) {
            foreach ($arrCategories as $category) {
                $categoryToAdd[$category] = ':'. $category;
                unset($categoryToAdd['name']);
            } */
    /* implode — Rassemble les éléments d'un tableau en une chaîne */
    /* array_keys — Retourne toutes les clés ou un ensemble des clés d'un tableau */
    /* $sql = "INSERT INTO " . $this->t_name . "(name) VALUES (". implode(",", $categoryToAdd) . ")";
            $req = $this->connection->getConnectionToBdd()->prepare($sql);

            foreach ($arrCategories as $data ) {
            $req->bindValue(":" . $data, $data);
            }
            
            $req->execute();
            



        }
    } */
}
