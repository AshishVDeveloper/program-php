<!DOCTYPE html>
<html>
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

<title>Display list Data</title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ashish_db";
// Create connection
include "auth.php";
if(!empty($_REQUEST['mode']) && $_REQUEST['mode']=='D')
{
	$id = $_GET["employe_id"]; 
   $sql = "DELETE  FROM  tbl_employee WHERE employe_id='$id'";
if ($conn->query($sql) === TRUE) {
  echo "Record Deleted successfully</br>";
  echo' <center><button class="btn btn-primary my-5 "><a href = "index.html" class="text-light">Add New User</a></button></center>';
} 
else {
  echo "Error: " . $sql . "<br>" . $conn->error;
	}
	}
	

$sql = "SELECT * FROM tbl_employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo ' <div class="container">
        <table class="table"><thead>

                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email Id</th>
                    <th scope="col">Mobile Number</th>
                    <th scope="col">Address</th>
                </tr>
            </thead>';
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["employe_id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["gender"]. "</td><td>" . $row["email_id"]. "</td><td>" . $row["mobile_no"]. "</td><td>" . $row["address"]. "</td></tr></br>";
	}
    echo "</table>";
     echo '<center><div><a href = "index.html"><button class="btn btn-primary my-5 " type="button">Go Back</button></a></div></center></br>';
} else {
    echo "0 results";
}
                                                                
$conn->close();
	
?>
</body>
</html>