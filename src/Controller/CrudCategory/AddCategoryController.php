<?php

use App\Repository\CategoryRepository;

require '../../../vendor/autoload.php';

$category = new CategoryRepository;
$name = $_POST['name'];


if (isset($name)) {
    $category->save($name);
}


header('Location: ../CategoryController.php');

