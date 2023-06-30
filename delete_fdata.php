<?php
include "auth.php";

$id=$_POST['id'];

  $sql = "DELETE  FROM  form_db WHERE id='$id'" ;


  if ($conn->query($sql) === TRUE) {
  echo "200::<center><b>Your User is deleted from the list successfully</center></b></br>";
 
} else {
  echo "400::Error: " . $sql . "<br>" . $conn->error;
	}


?>