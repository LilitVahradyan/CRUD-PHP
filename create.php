<?php
require "db.php";
 if(isset($_POST['username']) && isset($_POST['firstname']) && 
       isset($_POST['lastname']) && isset($_POST['email']) && 
       isset($_POST['password']) && isset($_POST['birthday'])){
       $username = $_POST['username'];
       $firstname = $_POST['firstname'];
       $lastname = $_POST['lastname'];
       $email = $_POST['email'];
       $password = md5($_POST['password']);
       $birthday = $_POST['birthday'];
      
      
       $sql = $conn->prepare("INSERT INTO users (username, firstname, lastname, email, password, birthday) 
       	                   VALUES (?, ?, ?, ?, ?, ?)");
        $sql->bind_param("ssssss", $username, $firstname, $lastname, $email, $password,  $birthday);
       if($sql === false){
       	  die("Failed to insert");
       }else{
       	echo "Insert into table successfully"; 
       }
    }
    $conn -> close();

    ?>