<?php

  namespace App\model;
  use App\model\DbModel;


  class ProfileModel {

    private $DB;
    private $queryData;
    private $userData;

    function __construct($id)
    {
      $DBModel = new DbModel();
      $this->DB = $DBModel->getConnection();
      // query user data 
      $this->queryData = $this->DB->query("SELECT * FROM `profiles` WHERE `user_id` = '$id'");
    }
    

    // get user profile 
    public function profileData () {
      if ($this->queryData->num_rows > 0) {
        while ($data = $this->queryData->fetch_assoc()) {
          $this->userData = $data;
        }
      }
      return $this->userData;
    }

  }