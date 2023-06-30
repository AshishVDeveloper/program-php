<!DOCTYPE html>
<html>
<head>
    <title>Display Form Data</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include "auth.php";

$id1=$_POST['id1'];



$sql="SELECT * FROM form_db WHERE id='$id1'";
$arr = $conn->query($sql);
$row = $arr->fetch_assoc();
?>
<div class="container">
<center><h5>My Details</h5></center>
<div class="container-fluid">
   <div class="row">
         <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $row['id']; ?>">
      <div class="col">
      <input type="text" class="form-control" id="f_name" name="fname" value="<?php echo $row['f_name']; ?>" required>
      </div>
    <div class="col">
      <input type="text" class="form-control" id="l_name" name="lname" value="<?php echo $row['l_name']; ?>" required>
    </div>
  </div>
</br>
<div class="container-fluid">
<select class="form-control selcls" id="gender" required>
 <option value="">Select your Gender</option>
 <option value="male" <?php if($row['gender']== "male"){ echo 'selected';} ?>>Male</option>
<option value="female" <?php if($row['gender']== "female"){ echo 'selected';} ?>>Female</option>
</select>
</br>
</div>
<div class="container-fluid">
<input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>" required>
</div>
</br>
<div class="container-fluid">
<input type="text" class="form-control" minlength="10" maxlength="10" id="mobile" name="mobile" value="<?php echo $row['mobile']; ?>" required>
</div>
</br>
<div class="row">
<div class="col">
<input type="text" class="form-control" id="address" name="address" value="<?php echo $row['address']; ?>" required>
</div>
 <div class="col">
<select id="state" class="form-control selcls" required>
      <option value="<?php echo $row['state']; ?>" selected ><?php echo $row['state']; ?></option>
    
</select>
</div>
<div class="col">
<select id="city" class="form-control selcls" required>
<option value="<?php echo $row['city']; ?>" selected><?php echo $row['city']; ?></option>
</select></div></div></br></br>
</div>
<div class="container-fluid">
    <center><button class="btn btn-primary" id="btn1" onclick="up_data()">Update Data</button></center>
  </div>
<?php
$conn -> close();
?>
</div></br>
<div id="up_d"></div>
<body>
<script type="text/javascript">

  
//Form Update Function is Created
function up_data(){
 // val id=:$('#id').value();
//  val id=document.getElementById('id').value;
  //alert(id);
  if(confirm('Are you sure to Update this record ?')){
//call ajax to send form values
$.ajax({
        type:'POST',
        url:"update_f.php", 
        dataType:"html",
        data:{"id":$('#id').val(),
        "f_name":$('#f_name').val(),
        "l_name":$('#l_name').val(),
        "gender":$('#gender').val(),
        "email":$('#email').val(),
        "mobile":$('#mobile').val(),
        "address":$('#address').val(),
        "state":$('#state').children("option:selected").val(),
        "city":$('#city').children("option:selected").val(),},
        success:function(responce){
        $('#up_d').html(responce);
        
        }
      }); }
  }
  </script>
<html>
