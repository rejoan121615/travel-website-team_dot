<?php

include __DIR__ . '../../../../vendor/autoload.php';

use App\model\CategoryModel;

$catagory = new CategoryModel();
$catagoryList = $catagory->getAllCategories();

// Convert the category list to JSON format
$categoryJson = json_encode($catagoryList);

// Return the JSON response
header('Content-Type: application/json');
echo $categoryJson;