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
$sql = "SELECT * FROM form_db";
$arr = $conn->query($sql);
if ($arr->num_rows > 0) {
 
    echo '
        <table class="table">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email Id</th>
                    <th scope="col">Mobile Number</th>
                    <th scope="col">Address</th>
                    <center><th scope="col"><center>Operations</center></th>
                </tr>
            ';
    // output data of each row
    while($row = $arr->fetch_assoc()) {
?>

<?php
        echo "<tr id=".$row['id'].">";
         echo "<td>" .$row["id"]. "</td>";
        echo "<td>" .$row['f_name']. " "  . $row['l_name']."</td>";
         echo "<td>" .$row["gender"]. "</td>";
         echo "<td>" .$row["email"]."</td>";
         echo "<td>" .$row["mobile"]. "</td>";
        echo "<td>" .$row["address"].", " .$row["city"]. ", ". $row["state"]. "</td>";
        
        echo '<td><center><button class="btn btn-danger" onclick="delete1('.$row['id'].')">';
        echo 'Delete</button>&nbsp; &nbsp;';
       
        
        echo  '<button class="btn btn-danger" id="'.$row['id'].'" onclick="update1('.$row['id'].')">';
        echo 'Update</button></center></td></tr>';
       
       
    }
    
  
} else {
    echo "0 results";
}
?>
</table>

 <center><div id="results"> </div></center>                                                            

<script type="text/javascript">

function delete1(id){
   var id=id;
if(confirm('Are you sure to remove this record ?')){
$.ajax({
        type:'POST',
        url:"delete_fdata.php", 
        data:'id='+id,
        success:function(responce){
            var resp = responce.split('::');
            if(resp[0]==200)
            {  window.location.reload(); }
            else
            {$('#results').html(resp[1]);} }}); } }
            </script>
 <script type="text/javascript">
function update1(x){
    var id1=x;
 


if(confirm('Are you sure to Update this record ?')){
$.ajax({
        type:'POST',
        url:"update_fdata.php", 
        data:'id1='+id1,
        success:function(responce){
        $('#results').html(responce);
        
        }
        }); }
else{
    $.ajax({
        success:function(responce){
        window.location.reload();}
    });
    
} 
}
        

</script>
</body>
</html>