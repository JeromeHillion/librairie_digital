<?php

use App\Repository\BookRepository;
use App\Repository\CategoryRepository;

ini_set('display_errors', true);

require '../../vendor/autoload.php';


$categoryRepository = new CategoryRepository;
$categories = $categoryRepository->getCategories();

$bookRepository = new BookRepository;
$books = $bookRepository->getBooks();

/* var_dump($books); */
require '../Vue/Admin/book.php';