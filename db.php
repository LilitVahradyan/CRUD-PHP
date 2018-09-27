<?php
   $servername = 'localhost';
   $username = 'root';
   $password = '';

   $conn = new mysqli($servername, $username, $password);

   if($conn->connect_error){
   	die("Connection field " .$conn->connect_error);
   }else{
   	echo "Connection successfully";
   }

   $database = "CREATE DATABASE IF NOT EXISTS myNewMySQL";

   if($conn->query($database) === TRUE){
   	  echo "Database created successfully";
   }else{
       die("Error " .$conn->error);
   }
   
   $conn->select_db("myNewMySQL");
   $sql = "CREATE TABLE IF NOT EXISTS users (
           `id` INT AUTO_INCREMENT PRIMARY KEY,
           `username` VARCHAR(20) NOT NULL,
           `firstname` VARCHAR(20) NOT NULL,
           `lastname` VARCHAR(20) NOT NULL,
           `email` VARCHAR(20) NOT NULL UNIQUE,
           `password` VARCHAR(20) NOT NULL UNIQUE,
           `birthday` DATE NULL)ENGINE=InnoDB";
    $table = $conn->query($sql);
    if($table === TRUE){
    	echo "Table created successfully";
    }else{
    	die("Error " .$conn->error);
    }

   
?>