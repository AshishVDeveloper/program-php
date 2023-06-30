<?php

 // add connection file
    include "auth.php";
 // gat the data from database  
     $state = "SELECT * FROM state_list";
     $result = $conn->query($state);
     
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
     echo "<option value=".$row['id'].">".$row['state_name']."</option>";
     }
     }
?>

