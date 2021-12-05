<?php

namespace App\Controller;


use DateTime;
use App\Entity\Book;
use App\Manager\ApiManager;
use App\Manager\DateManager;
use App\Repository\CategoryRepository;
use App\Repository\BookRepository;
use App\Entity\Category;

ini_set('display_errors', true);

require '../../vendor/autoload.php';
require '../Vue/Admin/catalog.php';




$categoryRepository = new CategoryRepository;

/* $book = new Book; */
$categoryRepository->saveCategoryToJson();
   /*  $bookRepository = new BookRepository;
    $datePublication = $dateManager->parseDateElementToInt($data->publication);


    $date = new DateTime();
    $book->setCover($data->cover)
        ->setName($data->name)
        ->setPublication($datePublication)
        ->setSummary($data->summary)
        ->setCategoryId($data->category_id)
        ->setAuthorId($data->author_id);

        $bookRepository->save($book); */
