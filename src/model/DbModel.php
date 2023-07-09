<?php

  namespace App\model;


  use mysqli;
  
  class DbModel {
    
    private $connection;
    
    // connection constructor 
     function __construct()
    {
        $this->connection = new mysqli('localhost', 'root', '', 'travel-blog');
        
        // check if connection fail 
        if ($this->connection->connect_errno) {
          echo "Failed to connect to mysql";
          // like to show an ui 
          exit();
        }
    }

    // register user 
    public function createUser ($name, $email, $password) {
      // check if the user available 
      $queryData = $this->connection->query("SELECT * FROM users WHERE email = '$email'");
      // if not available then push new user 
      if ($queryData->num_rows) {
        $this->connection->close();
        return ['msg' => 'Another user is already there with email', 'created' => false];
      } else {
        $queryData = $this->connection->query("INSERT INTO users (`name`, `email`, `password`) VALUES ('$name', '$email', '$password');");
        $this->connection->close();
        return ['msg' => 'Register successfully', "created" => true];
      }
    }

    // login user method 
    public function verifyUser ($email, $password) {
      $queryData = $this->connection->query("SELECT * FROM users WHERE email = '$email'");

      if ($queryData->num_rows > 0) {
        // data 
         $data =  $queryData->fetch_assoc();
        //  verify pass 
        if (password_verify($password, $data['password'])) {
          $this->connection->close();
          return ['msg' => 'verifyed successfully', 'data' => $data];
        } else {
          $this->connection->close();
          return ['msg' => 'Wrong password'];
        }
      } else {
        $this->connection->close();
        return ['msg' => "User not found"];
      }
    }

    // profile table 
    // public function 
    
  }