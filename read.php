<?php
$sql = "SELECT id, username, firstname, lastname, email, password, birthday, gender FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Username: " . $row["username"]. " " . $row["firstname"].  " " .$row["lstname"]. 
             .$row["email"]. " " .$row["password"]. " " .$row["birthday"]. " " .$row["gender"] "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>