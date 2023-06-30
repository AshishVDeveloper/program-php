<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>
<body>

<?php
include "auth.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  
    $name = $_POST['name']; 
    $gender = $_POST['gender']; 
    $email_id = $_POST['email']; 
    $mobile_no = $_POST['mobile']; 
    $address = $_POST['address']; 

 
  if (empty($name)) {
    echo "Name is empty</br>";
   } if (empty($gender)) {
    echo "Name is empty</br>";
  } if (empty($email_id)) {
    echo "Email_Id is empty</br>";
  } if (empty($mobile_no)) {
    echo "mobile No is empty</br>";
  }if (empty($address)) {
    echo "Address is empty</br>";
  }

  $sql = "INSERT INTO tbl_employee ( name, email_id, mobile_no, address, gender)
VALUES ('$name', '$email_id',$mobile_no,'$address','$gender')";

if ($conn->query($sql) === TRUE) {
  echo "<b><center>New record created successfully</center</b></br>";
  echo '<center><div><a href = "Datalist.php"><button class="btn btn-primary my-5 " type="button">See the List</button></a></div></center></br>';
 
} 
else {
  echo "<center><b>mobile no is alredy in record</b></center>";
 echo '<center><div><a href = "index.html"><button class="btn btn-primary my-5 " type="button">Go Back</button></a></div></center></br>';
}
}

?>
</body>
</html>