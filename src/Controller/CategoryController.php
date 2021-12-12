<?php

use App\Repository\CategoryRepository;

ini_set('display_errors', true);

require '../../vendor/autoload.php';

$categoryRepository = new CategoryRepository;
$categories = $categoryRepository->getCategories();

require '../Vue/Admin/category.php';

