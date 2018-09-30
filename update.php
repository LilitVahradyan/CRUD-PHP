<!DOCTYPE html>
<html>
<head>
    <title>homework</title>
    <style>
        .menu{
            list-style-type: none;
            display: flex;
            flex-direction:row;
        }
        .menu li{
            padding: 15px;  
            font-size: 30px
        }
        a{
            text-decoration: none
        }
    </style>
</head>
<body>
 <body>
      <ul class="menu">
        <a href="index.php"><li>Menu</li></a>
        <a href="#"><li>Home</li></a>
        <a href="users.php"><li>Users</li></a>
      </ul>
</body>
</html>
<?php
 	require_once 'db.php';
    $id = $_GET['editid'];
    $user = "SELECT * FROM users WHERE  id=$id";
    $result = $conn->query($user);
    $data = $result->fetch_assoc();
    $conn->close();
   
 ?> 

<form action="updateUser.php" method="post"> 
	<input type="hidden" name="editId" value="<?= $id  ?>">
	<input type="text" name="username" value="<?= $data['username']?>" placeholder="Username"><br><br>
	<input type="text" name="firstname" value="<?= $data['firstname']?>" placeholder="First Name"><br><br>
	<input type="text" name="lastname" value="<?= $data['lastname']?>" placeholder="LastName"><br><br>
	<input type="email" name="email" value="<?= $data['email']?>" placeholder="Email"><br><br>
	<input type="password" name="password" value="<?= $data['password']?>" placeholder="password"><br><br>
	<input type="date" name="birthday" value="<?= $data['birthday']?>" placeholder="Birthday"><br><br>
	<input type="radio" name="gender"<?php if($data['gender'] ==="male"){ ?> checked <?php } ?> value="male"><br>
	<input type="radio" name="gender"<?php if($data['gender'] ==="female"){ ?> checked <?php } ?> value="Female"><br>
	<input type="submit" value="Send">
</form>