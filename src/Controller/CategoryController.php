<?php

use App\Repository\CategoryRepository;

ini_set('display_errors', true);

require '../../vendor/autoload.php';
require '../Vue/Admin/category.php';

$category = new CategoryRepository;


if($_POST)
{
    $name = $_POST['categoryName'];
    $category->save($name);
}

$categories = $category->getCategories();


var_dump($categories);