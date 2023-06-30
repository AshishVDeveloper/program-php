
<?php
include "auth.php";
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
        echo "<tr><td>" . $row["employe_id"]. "</td><td>" . $row["name"]. "</td><td>" . $row["gender"]. "</td><td>" . $row["email_id"]. "</td><td>" . $row["mobile_no"]. "</td><td>" . $row["address"]. "</td></tr>";
	}
    echo "</table>";
} else {
    echo "0 results";
}
?>