 <!DOCTYPE html>
<html>
<head>
	<title>Homework</title>
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
	  <ul class="menu">
      	<a href="#"><li>Menu</li></a>
      	<a href="#"><li>Home</li></a>
        <a href="#"><li>Users</li></a>
      </ul>
<form action="create.php" method="post">
	   <input type="text" name="username" placeholder="Username"><br><br>
	   <input type="text" name="firstname" placeholder="First Name"><br><br>
	   <input type="text" name="lastname" placeholder="LastName"><br><br>
	   <input type="email" name="email" placeholder="Email"><br><br>
	   <input type="password" name="password" placeholder="password"><br><br>
	   <input type="date" name="birthday" placeholder="Birthday"><br><br>
	    <input type="radio" name="gender" value="male"> Male<br>
       <input type="radio" name="gender" value="female"> Female<br>
	 
	   <input type="submit" value="Send">

	</form> 
	
</html>
</body>
</html>
