
<?php
session_start();
include "auth.php";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field 
	$mobile_no = $_POST['mobile']; 
  $sql = "DELETE  FROM  tbl_employee WHERE mobile_no='$mobile_no'";

if ($conn->query($sql) === TRUE) {
  echo "<center><b>Your User is deleted from the list successfully</center></b></br>";
  include "deleted_data.php";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
}
	
?>