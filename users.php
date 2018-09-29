<?php 
require_once 'read.php';

print_r($users);

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
    <td><a href="update.php?editid=<?php $user.id?>">Update</a></td>
    <td><a href="delete.php.php?editid=<?php $user.id?>">Delete</a></td>
    
</table>