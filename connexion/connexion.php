<?php

    include __DIR__.'/../vendor/autoload.php';

    $dotenv = \Dotenv\Dotenv::createImmutable(__DIR__.'/../');
    $dotenv->load();

    $serverName = $_ENV["DB_SERVERNAME"];
    $name= $_ENV["DB_NAME"];
    $userName= $_ENV["DB_USERNAME"];
    $password= $_ENV["DB_PASSWORD"];

    $conn =mysqli_connect($serverName, $userName, $password, $name);

    if(isset($conn->connect_error)){
        die('error connection here '. $conn->connect_error);
    }
?>
