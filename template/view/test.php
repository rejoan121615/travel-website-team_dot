<?php
require __DIR__ . '/vendor/autoload.php';

$faker = Faker\Factory::create();

$db = new MysqliDb (Array (
    'host' => 'localhost',
    'username' => 'root', 
    'password' => '',
    'db'=> 'lioncommerce',
    'charset' => 'utf8'));

    $data = [
        'name'=> $faker->name(),
        'email'=> $faker->email(),
        'password'=> password_hash("secret",PASSWORD_DEFAULT),
        'role'=> '1'
    ];
    $id = $db->insert ('users', $data);
    echo $id;
?>