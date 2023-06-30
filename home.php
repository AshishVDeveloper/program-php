<html>
<title>Add User page</title>
<head>

  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
<title>Add Data Page</title>
</head>
<body>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>  

	<center><h3>Add User Page</h3></center>
  <?php ?>
<form >
  <select id="state" class="form-control selcls" >
  <option value="">Select State:</option>
   <?php
  include "load_state.php";
  ?>
  </select>
  
  
<select id="city" class="form-control selcls" >
  <option value="">Select City:</option>
      

  </select>
</form> 
<button type="button" value="click">check</button></br>


<script type="text/javascript">

//for city load.....


   $("#state").on('change',function(){
var  state=$(this).children("option:selected").val();
$.ajax({
        type:'POST',
        url:"load_city.php", 
        data:{state_id:state},
        success:function(result){
        $('#city').html(result);}
      }); 

   });




  </script>

</body>
</html>
