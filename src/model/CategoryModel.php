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
public function getAllCategories()
    {
        $query = $this->DB->query("SELECT * FROM `travel-blog`.categories;");
        $categoryData = [];

        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                $categoryData[] = $row;
            }
        }

        return $categoryData;
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


  // ...

// Get category by ID
public function getCategoryByID($id)
{
    $id = $this->DB->real_escape_string($id);
    $query = "SELECT * FROM `travel-blog`.categories WHERE id = '$id'";
    $result = $this->DB->query($query);

    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return false;
    }
}

// Delete category by ID
public function deleteCategory($id)
{
    $id = $this->DB->real_escape_string($id);
    $query = "DELETE FROM `travel-blog`.categories WHERE id = '$id'";
    $result = $this->DB->query($query);

    return $result;
}




  }