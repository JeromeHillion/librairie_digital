<?php

use App\Repository\CategoryRepository;

ini_set('display_errors', true);

require '../../vendor/autoload.php';

$category = new CategoryRepository;


$categories = $category->getCategories();
require '../Vue/Admin/category.php';
