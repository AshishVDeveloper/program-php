<?php
  // collect value of input field 
   include "auth.php";
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $gender = $_POST['gender']; 
    $email_id = $_POST['email']; 
//check email is valid or not
    if (!filter_var($email_id, FILTER_VALIDATE_EMAIL)){
   echo "<b><center>Email Id is Invalid</center</b></br>";
    $email_id ='';
     }
else{
	$email_id = $_POST['email']; 
}
// collect value of input field 
    $mobile_no = $_POST['mobile']; 
    $address = $_POST['address']; 
    $city = $_POST['city'];
    $state = $_POST['state']; 
 // chande the variable value 
   if($state==1){
   	$state="Maharashtra";
   }
   if($state==2){
   	$state="Utter Pradesh";
}
//check mobile no is 10 digit or not 
if (strlen($mobile_no)==10){
//validate all field is fill or not
	if (!empty($f_name) && !empty($l_name) && !empty($gender) && !empty($email_id) && !empty($mobile_no) && !empty($address) && !empty($city) && !empty($state)) {
// database insert querry
$sql="INSERT INTO form_db (f_name, l_name, gender, email, mobile, address, city, state) VALUES ('$f_name','$l_name','$gender','$email_id','$mobile_no','$address','$city','$state')";
 //check querry is correct or not 
 if ($conn->query($sql) === TRUE) {
  echo "<b><center>New record created successfully</center</b></br>"; 
} 
else {
  echo "<center><b>Record Not Created</b></center>";
 
}}}

?>