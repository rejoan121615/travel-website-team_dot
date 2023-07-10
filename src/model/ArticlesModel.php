<?php

namespace App\model;
use App\model\DbModel;

class ArticlesModel {

    private $DB;
    private $queryData;
    private $userData;

    function __construct()
    {
      $DBModel = new DbModel();
      $this->DB = $DBModel->getConnection();
      // query user data 
      $this->queryData = $this->DB->query("SELECT * FROM `articles`");
    }
    

    // get user profile 
    public function articleData () {
      if ($this->queryData->num_rows > 0) {
        while ($data = $this->queryData->fetch_assoc()) {
          $this->userData = $data;
        }
      }
      return $this->userData;
    }

    // get all profile 
     public function AllArticles () {
      $data = $this->DB->query("SELECT * FROM `articles`;");
      if ($data->num_rows > 0) {
        print_r($data->fetch_all());
      }
    }


    // create article method 
    public function createArticle ($title, $description, $image, $category_id, $tag_id) {
        // convert array to string 
        $convertedTagId = implode(',', $tag_id);
      $query = $this->DB->prepare("INSERT INTO `articles` (title, description, image, category_id, tag_id) VALUES (?, ?, ?, ?, ?)");
      $query->bind_param("sssss", $title, $description, $image, $category_id, $convertedTagId);
      $query->execute();
    }




  }

?>