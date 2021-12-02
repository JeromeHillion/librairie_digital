<?php

use App\Repository\CategoryRepository;

require '../../../vendor/autoload.php';

$category = new CategoryRepository;
$name = $_POST['categoryName'];

if (empty($name) && isset($name)) {
    $category->save($name);
}


header('Location: ../CategoryController.php');

