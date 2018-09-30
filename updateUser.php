<?php 
	require_once 'db.php';
	$username=$_POST['username'];
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$birthday = $_POST['birthday'];
	$gender = $_POST['gender'];
	$id = $_POST['editId'];

	$update = $conn->prepare("UPDATE users SET username = ?, firstname = ?, lastname = ?, email = ?, password =?, 
		                                      birthday = ?, gender = ? WHERE id = ?");
	$update->bind_param("sssssssi", $username, $firstname, $lastname, $email, $password, $birthday, $gender, $id);
	 
	$update->execute();
	$update->close();
	$conn->close();
    header("Location:users.php");
?>
