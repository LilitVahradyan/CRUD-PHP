<?php
require_once 'db.php';
    
    $sql = "SELECT id FROM users";
    $result = $conn->query($sql);
    for($result=0; $result<count($sql); $result++){
    
       if(isset($_GET["id"])){
       	 $user = "SELECT * FROM users WHERE id=1";
          
        }
   }
   $conn->close();
 ?> 
  