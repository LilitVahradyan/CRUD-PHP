<?php
   $servername = 'localhost';
   $username = 'root';
   $password = '';

   $conn = new mysqli($servername, $username, $password);

   

   $database = "CREATE DATABASE IF NOT EXISTS myNewMySQL";

   
   
   $conn->select_db("myNewMySQL");
   $sql = "CREATE TABLE IF NOT EXISTS users (
           `id` INT AUTO_INCREMENT PRIMARY KEY,
           `username` VARCHAR(20) NOT NULL,
           `firstname` VARCHAR(20) NOT NULL,
           `lastname` VARCHAR(20) NOT NULL,
           `email` VARCHAR(20) NOT NULL UNIQUE,
           `password` VARCHAR(20) NOT NULL UNIQUE,
           `gender` ENUM('male', 'female') NOT NULL,
           `birthday` DATE NULL)ENGINE=InnoDB";
    $table = $conn->query($sql);
    
   
?>