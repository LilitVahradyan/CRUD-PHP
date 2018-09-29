<?php 
require_once 'db.php';
$username=$_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = md5($_POST['password']);
$birthday = $birthday = new DateTime($_POST['birthday']);
$birthday = $birthday->format("d-m-Y");
$gender = $_POST['gender'];
$update = "UPDATE users SET $username, $firstname, $lastname, $email, $password, $birthday, $gender  WHERE id=$id";

?>
