<?php

  namespace App\model;
  use App\model\DbModel;


  class CategoryModel {

    private $DB;
    private $queryData;
    private $userData;

    function __construct()
    {
      $DBModel = new DbModel();
      $this->DB = $DBModel->getConnection();
    }
    

    // get all category 
 public function getAllCategoryNames() {
    $query = $this->DB->query("SELECT name FROM `travel-blog`.categories;");
    $categoryNames = [];

    if ($query->num_rows > 0) {
        while ($row = $query->fetch_assoc()) {
            $categoryNames[] = $row['name'];
        }
    }

    return $categoryNames;
}

 // Get category by name
    public function getCategoryByName($name)
    {
        $name = $this->DB->real_escape_string($name);
        $query = "SELECT * FROM `travel-blog`.categories WHERE name = '$name'";
        $result = $this->DB->query($query);

        if ($result->num_rows > 0) {
            return $result->fetch_assoc();
        } else {
            return false;
        }
    }


    // create new category 
  public function createCategory($name, $description) {
    // Prepare the SQL statement
    $query = $this->DB->prepare("INSERT INTO `travel-blog`.categories (name, description) VALUES (?, ?)");

    // Bind the parameters
    $query->bind_param("ss", $name, $description);

    // Execute the statement
    if ($query->execute()) {
      // echo "Category created successfully";
    } else {
      // echo "Error creating category: " . $query->error;
    }

    // Close the statement
    $query->close();
  }


  }

