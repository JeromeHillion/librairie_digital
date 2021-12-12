<?php

use App\Repository\AuthorRepository;
use App\Repository\BookRepository;
use App\Repository\CategoryRepository;

require '../../../vendor/autoload.php';

$book = new BookRepository;
$isbn = $_POST['isbn'];
$cover = $_POST['cover'];
$name = $_POST['name'];
$publication = $_POST['publication'];
$summary = $_POST['summary'];
$category = $_POST['category'];
$author = $_POST['author'];

if (isset($isbn) && isset($cover) && isset($name) && isset($publication) && isset($summary) && isset($category) && isset($author)) {

    $categoryRepository = new CategoryRepository;
    $datasCategory =$categoryRepository->findCategoryByName($category);

    $authorRepository = new AuthorRepository();
    $datasAuthor = $AuthorRepository->findAuthorByName($author);

    

    $book = new Book;
    $bookRepository = new BookRepository;
    $bookRepository->save($book);
}


header('Location: ../CategoryController.php');

