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

    $book = new Book();

    $book->setIsbn($isbn);
    $book->setCover($cover);
    $book->setName($name);

    $dateManager = new DateManager();
    $datePublication = $dateManager->parseDateElementToInt($publication);
    $book->setPublication($datePublication);

    $book->setSummary($summary);

    $categoryRepository = new CategoryRepository;
    /* $category = str_replace("+","",$category); */
    $datasCategory = $categoryRepository->findCategoryByName($category);

    $category_id =  intval($datasCategory['id']);
    $book->setCategoryId($category_id);

    $authorRepository = new AuthorRepository();
    $datasAuthor = $authorRepository->findAuthorByName($author);
    if (!$datasAuthor) {
        $authorRepository->save($author);
    } else {
        $author_id = intval($datasAuthor['id']);
        $book->setAuthorId($author_id);
    }


    $bookRepository = new BookRepository;
    $datasBook = $bookRepository->findByName($name);

    if (!$datasBook) {
        $bookRepository->save($book);
    }
    header('Location: ../BookController.php');
}
