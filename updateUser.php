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
	$id = $_POST['id'];

	$update =$conn-?prepare("UPDATE users SET ?, ?, ?, ?, ?, ? WHERE id=$id")
	$update = bind_param("ssssss", 'username'=$username, 'firstname'=$firstname, 'lastname'=$lastname, 'email'=$email,
	 'password'= $'password','birthday'=$birthday, 'gender'=$gender);
    header("Locaion:users.php");
?>
