<?php
require '../../../vendor/autoload.php';
use App\Repository\CategoryRepository;

$category = new CategoryRepository;
$categories =json_encode($category->getCategories()) ;
echo $categories;