<?php
require "db.php";
 if(isset($_POST['username']) && isset($_POST['firstname']) && 
       isset($_POST['lastname']) && isset($_POST['email']) && 
       isset($_POST['password']) && isset($_POST['birthday']) && isset($_POST['gender'])){
       $username = $_POST['username'];
       $firstname = $_POST['firstname'];
       $lastname = $_POST['lastname'];
       $email = $_POST['email'];
       $password = md5($_POST['password']);
       $birthday = $birthday = new DateTime($_POST['date']);
       $birthday = $birthday->format("Y-m-d");
       $gender = $_POST['gender'];
      
      
       $sql = $conn->prepare("INSERT INTO users (username, firstname, lastname, email, password, birthday, gender) 
       	                   VALUES (?, ?, ?, ?, ?, ?, ?)");
       $sql->bind_param("sssssss", $username, $firstname, $lastname, $email, $password,  $birthday, $gender);
       if($sql === false){
       	  die("Failed to insert");
       }else{
       	echo "Insert into table successfully"; 
       }
    }
    $sql->execute();
    $sql->close();
    $conn -> close();

    ?>