    <?php
require_once 'db.php';
    $user = "SELECT * FROM users WHERE  id=$_GET['editid']";
    $result = $conn->query($user);
    $data = $result->fetch_assoc();
   
 ?> 
     




      <form action="" method=""> 
       <input type="text" name="username" value="<?php $user.username?>" placeholder="Username"><br><br>
	   <input type="text" name="firstname" value="<?php $user.firstname?>" placeholder="First Name"><br><br>
	   <input type="text" name="lastname" value="<?php $user.lastname?>" placeholder="LastName"><br><br>
	   <input type="email" name="email" value="<?php $user.email?>" placeholder="Email"><br><br>
	   <input type="password" name="password" value="<?php $user.password?>" placeholder="password"><br><br>
	   <input type="date" name="birthday" value="<?php $user.birthday?>" placeholder="Birthday"><br><br>
	    <input type="radio" name="gender" value="<?php $user.male?>"> Male<br>
       <input type="radio" name="gender" value="<?php $user.female?>"> Female<br>
	 
	   <input type="submit" value="Send">
	</form>
	