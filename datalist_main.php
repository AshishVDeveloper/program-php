<!DOCTYPE html>
<html>
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

<title>Display list Data Main</title>
</head>
<body>

<?php
include "auth.php";

if(!empty($_REQUEST['mode']) && $_REQUEST['mode']=='D1')
{
	$id = $_GET["employe_id"]; 
   $sql = "DELETE  FROM  tbl_employee WHERE employe_id='$id'";
if ($conn->query($sql) === TRUE) {
  echo "<center><b>Record Deleted successfully</b></center></br>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
	}
	}
	

$sql = "SELECT * FROM tbl_employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo' <center><button class="btn btn-primary my-5 "><a href = "index.html" class="text-light">Add New User</a></button></center>';
    echo ' <div class="container">
        <table class="table"><thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    
                    <th scope="col">Email Id</th>
                    <th scope="col">Mobile Number</th>
                    <th scope="col">Address</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>';
    // output data of each row
    while($row = $result->fetch_assoc()) {

        echo "<tr><td>" . $row["employe_id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["address"]. "</td><td>" . $row["email_id"]. "</td><td>" . $row["mobile_no"]. "</td><td>" . $row["gender"]. "</td>";

        echo '<td><button class="btn btn-danger"><a href="datalist_main.php?mode=D1&employe_id='.$row['employe_id'].'" class="text-light">Delete</button></a>&nbsp &nbsp <a href = "update.html">';

        echo '<button class="btn btn-primary" on_click="w_update()">Update</button></a></td></tr>';
	}
    echo "</table>";
} else {
    echo "0 results";
}
                                                                
$conn->close();
	
?>
</body>
</html>