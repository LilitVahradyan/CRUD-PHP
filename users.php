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
require_once 'read.php';

?>
<table border="1">

    <tr>
        <?php
        foreach ($users[0] as $key=>$row){
        ?>
        <th>
            <?= $key; ?>

        </th>
        <?php }?>
    </tr>


    <?php
    foreach ($users as $user){

    ?>
      <tr>
        <?php
        foreach ($user as $us){

            ?>
            <td>

                <?= $us; ?>

            </td>
         <?php }?>

      </tr>
    <?php }?>
    
     <tr>
        <?php
        foreach($user as $row){
            ?>
            <td>
                 <a href="update.php?editid=<?= $user['id']?>">Update</a>
            </td>
             <?php }?>
       </tr>
       <tr>
        <?php
        foreach($user as $row){
            ?>
            <td>
                <a href="delete.php?deleteid=<?= $user['id']?>">Delete</a>
            </td>
             <?php }?>
       </tr>
   
    
</table>
