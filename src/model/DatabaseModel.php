<?php

  class Db {
    
    private $connection;
    
    // connection constructor 
    function __construct($userName, $password, $dbName)
    {
        $this->connection = new mysqli('localhost', $userName, $password, $dbName);
        print_r($this->connection);
    }
    
  }