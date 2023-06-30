<?php
$id=$_POST['id'];
$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
include "auth.php";
$sql = "UPDATE form_db SET f_name='$f_name', l_name='$l_name', gender='$gender', 
email='$email', mobile='$mobile', address='$address' WHERE id='$id'";
//check querry is correct or not 
if ($conn->query($sql) === TRUE) {
  echo "<b><center>Record Changed Successfully</center</b></br>"; 
  echo '<a href="form_all_data.php"><button class="btn btn-danger">back</button>';
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
	}
?>