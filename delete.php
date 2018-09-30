<?php
 	require_once 'db.php';
    $id = $_GET['editid'];
    $user = "SELECT * FROM users WHERE  id=$id";
    $result = $conn->query($user);
    $data = $result->fetch_assoc();
    
    ?>

<form action="deleteUser.php" method="post"> 
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