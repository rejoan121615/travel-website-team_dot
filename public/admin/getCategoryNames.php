<?php

require __DIR__ . '../../../vendor/autoload.php';
use App\model\CategoryModel;

$categoryModel = new CategoryModel();
$allCategoryNames = $categoryModel->getAllCategoryNames();

$searchTerm = isset($_GET['search']) ? $_GET['search'] : '';

// Filter category names based on the search term
$matchingCategoryNames = [];
foreach ($allCategoryNames as $categoryName) {
    if (stripos($categoryName, $searchTerm) !== false) {
        $matchingCategoryNames[] = $categoryName;
    }
}

// Return the matching category names as a JSON response
echo json_encode($matchingCategoryNames);
?>
