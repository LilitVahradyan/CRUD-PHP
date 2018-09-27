<?php
require_once 'db.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

$users = array("id: " . $row["id"]. " - Username: " . $row["username"]. " " . $row["firstname"].  " " .$row["lastname"]. " "
             .$row["email"]. " " .$row["password"]. " " .$row["birthday"]. " " .$row["gender"] ."<br>");

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        array_push($users, $row);
    }
}else {
    echo "0 results";
}


$conn->close();
?>