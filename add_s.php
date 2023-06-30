<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Crud Display</title>
</head>

<body>
    <div class="container">
       <button class="btn btn-primary my-5 "><a href="index.html" class="text-light">Add User</a></button>
   </div>
   <div class="container"><table class="table">
            <thead>

                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email Id</th>
                    <th scope="col">Mobile Number</th>
                    <th scope="col">Address</th>
                </tr>
            </thead> 
            
<?php 

 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  
    $name = $_POST['name']; 
    $gender = $_POST['gender']; 
    $email_id = $_POST['email']; 
    $mobile_no = $_POST['mobile']; 
    $address = $_POST['address']; 

$data = array("$name", "$gender", "$email_id", "$mobile_no","$address");

     
echo "<tbody><tr><td>" . $data[0]. "</td><td>" . $data[1]. "</td><td>" . $data[2]. "</td><td>" . $data[3]. "</td><td>" . $data[4]. "</td></tr></tbody>
        </table></div>";
      
            
}
include "Add.php"; 
       
        ?>
       
</body>

</html>