<?php 
 	require_once 'db.php';
 	$id = $_POST['editId'];

 	$delete = $conn->prepare("DELETE FROM users WHERE id = ?");
 	$delete = bind_param("i", $id);
 	header("Locaion:users.php");

?>