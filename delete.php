<?php
 	require_once 'db.php';
    $id = $_GET['deleteid'];
    $delete = $conn->prepare("DELETE FROM users WHERE id = ?");
    $delete = bind_param("i", $id);
    $delete->execute();
    $delete->close();
    $conn->close();
    header("Locaion:users.php");
?>
