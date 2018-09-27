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
</table>