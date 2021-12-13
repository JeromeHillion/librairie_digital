<?php

use App\Entity\Book;
use App\Manager\DateManager;
use App\Repository\AuthorRepository;
use App\Repository\BookRepository;
use App\Repository\CategoryRepository;

require '../../../vendor/autoload.php';


$isbn = $_POST['isbn'];
$cover = $_POST['cover'];
$name = $_POST['name'];
$publication = $_POST['publication'];
$summary = $_POST['summary'];
$category = $_POST['category'];
$author = $_POST['author'];

if (isset($isbn) && isset($cover) && isset($name) && isset($publication) && isset($summary) && isset($category) && isset($author)) {


    $dateManager = new DateManager();
    $datePublication = $dateManager->parseDateElementToInt($publication);
    
    $categoryRepository = new CategoryRepository;
    $datasCategory = $categoryRepository->findCategoryByName($category);
  
        $category_id = intval($datasCategory['id']);
    

    $authorRepository = new AuthorRepository();
    $datasAuthor = $authorRepository->findAuthorByName($author);
    if(!$datasAuthor){
        $authorRepository->save($author);
    }

    else{
        $author_id = intval($datasAuthor['id']) ;
    }


    $bookRepository = new BookRepository;
    $datasBook = $bookRepository->findByName($name);

    if (!$datasBook) {
        $bookRepository->save($isbn,$cover,$name,$publication,$summary,$category_id,$author_id);  
       
    }
     header('Location: ../BookController.php');
}



