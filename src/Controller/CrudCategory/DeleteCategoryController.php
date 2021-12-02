<?php

use App\Repository\CategoryRepository;

require '../../../vendor/autoload.php';

$category = new CategoryRepository;
$id = $_POST['categoryId'];
$category->delete($id);

header('Location: ../CategoryController.php');

