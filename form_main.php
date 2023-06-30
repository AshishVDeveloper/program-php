<html>
<title>My Details</title>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
 <div class="container">
  <center><h1>My Details</h1></center>
<form method="POST">
 <div class="container-fluid">
   <div class="row">
    <div class="col">
      <input type="text" class="form-control" id="fname" name="fname" placeholder="First name" required>
    </div>
    <div class="col">
      <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name" required>
    </div>
  </div></br>
  <div class="container-fluid">
<select class="form-control selcls" id="gender" required>
 <option value="">Select your Gender</option>
 <option value="male">Male</option>
<option value="female">Female</option>
</select>
</br>
</div>
<div class="container-fluid">
<input type="email" class="form-control" id="email" name="email" placeholder="Email Address" required>
</div></br>
<div class="container-fluid">
<input type="text" class="form-control" minlength="10" maxlength="10" id="mobile" name="mobile" placeholder="Mobile Number" required>
</div></br>
  <div class="row">
    <div class="col">
<input type="text" class="form-control" id="address" name="address" placeholder="Address" required>
</div>
 <div class="col">
<select id="state" class="form-control selcls" required>
      <option value="">Select State</option>
      <?php
       include "load_state.php";
       ?>
</select>
</div><div class="col">
<select id="city" class="form-control selcls" required>
        <option value="">Select City</option>
</select></div></div></br></br>
</div>

<div class="container-fluid">
    <center><button class="btn btn-primary" id="btn1" onclick="datamain()">Form Submit</button></center>
  </div>
  </form>
</div>
<div id="results"></div>
<script type="text/javascript">
//call the click function on #state id
   $("#state").on('change',function(){
var  state=$(this).children("option:selected").val();
//call ajax to load city
$.ajax({
        type:'POST',
        url:"load_city.php", 
        data:{state_id:state},
        success:function(result){
        $('#city').html(result);}
      }); 
   });
//Form Submit Function is Created
function datamain(){
//call ajax to send form values
$.ajax({
        type:'POST',
        url:"form_data.php", 
        dataType:"html",
        data:{"f_name":$('#fname').val(),
        "l_name":$('#lname').val(),
        "gender":$('#gender').val(),
        "email":$('#email').val(),
        "mobile":$('#mobile').val(),
        "address":$('#address').val(),
        "state":$('#state').children("option:selected").val(),
        "city":$('#city').children("option:selected").val(),},
        success:function(responce){
        $('#results').html(responce);}
      }); 
  }
  </script>
</body>
</html>
