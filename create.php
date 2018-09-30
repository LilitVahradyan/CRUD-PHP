<?php
require_once "db.php";

 if(isset($_POST['username']) && isset($_POST['firstname']) && 
       isset($_POST['lastname']) && isset($_POST['email']) && 
       isset($_POST['password']) && isset($_POST['birthday']) && isset($_POST['gender'])){
       $username = $_POST['username'];
       $firstname = $_POST['firstname'];
       $lastname = $_POST['lastname'];
       $email = $_POST['email'];
       $password = md5($_POST['password']);
       $birthday = $_POST['birthday'];
       $gender = $_POST['gender'];
      
      
       $sql = $conn->prepare("INSERT INTO users (username, firstname, lastname, email, password, birthday, gender) 
       	                      VALUES (?, ?, ?, ?, ?, ?, ?)");
       $sql->bind_param("sssssss", $username, $firstname, $lastname, $email, $password,  $birthday, $gender);
       
    }
header("Location:users.php") ;
$sql->execute();
$sql->close();
$conn->close();

?>