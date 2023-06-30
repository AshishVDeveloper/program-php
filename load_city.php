 <?php
 // add connection file
    include "auth.php";
 // get the data from the selected value    
     $stateID=$_POST['state_id'];
 // gat the data from database 
     $city = "SELECT * FROM city_list WHERE state_id='$stateID'";
    
     $result = $conn->query($city);
  ?>
<option value="">Select City:</option>
  <?php
      if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {

 echo "<option value=".$row['city_name'].">".$row['city_name']."</option>";
  }
  
  }  
  ?>

