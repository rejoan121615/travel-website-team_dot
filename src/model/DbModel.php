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

    public function createUser ($name, $email, $password) {
      // $this->connection->query('INSERT INTO users (`name`, `email`, `password`) VALUES (`Mohd Rejoan`, `wearecrx@gmail.com`, `12345`);');
      $this->connection->query("INSERT INTO users (`name`, `email`, `password`) VALUES ('$name', '$email', '$password');");
      $this->connection->close();
    }
    
  }