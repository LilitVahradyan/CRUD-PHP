<?php
require_once 'db.php';

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

$users = array("id: " . ["id"]. " - Username: " . ["username"]. " " . ["firstname"].  " " .["lastname"]. " "
             .["email"]. " " .["password"]. " " .["birthday"]. " " .["gender"] ."<br>");

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        array_push($users, $row);
    }
}else {
    echo "0 results";
}


$conn->close();
?>