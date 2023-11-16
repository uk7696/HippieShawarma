 <style>
.dbresult,.dbresult td, .dbresult th{
    border:1px solid black;
    border-collapse:collapse;
    padding: 10px;
}
.dbresult{
    width:1000px;
    margin:auto;
}
.dbresult tr:nth-child(odd){
 background-color:#b2d0d6 ;
}
.dbresult tr:nth-child(even){
    background-color:lightcyan;
}



</style> 

<?php

$con = new mysqli('localhost','root','','base');

if($con -> connect_error){
    die('Connection Error:'.$con-> connect_error);
    }
//fetch data from table and display in web

$query = "SELECT id,username,email,mobile,cityname,area,budget,duration,callingtime,address1,message1 FROM emplist";

$result = mysqli_query($con,$query);
$numrows = mysqli_num_rows($result);

if ($numrows > 0){
   //filter row by row
echo '<table class="dbresult">';
   echo '<tr>';
   
   echo '<th>ID</th>';
   echo '<th>NAME</th>';
   echo '<th>EMAILID</th>';
   echo '<th>MOBILE NUMBER</th>';
   echo '<th>CITYNAME</th>';
   echo '<th>SHOP SIZE</th>';
   echo '<th>BUDGET</th>';
   echo '<th>TIME DURATION</th>';
   echo '<th>FREE TIME TO CALL</th>';
   echo '<th>ADDRESS</th>';
   echo '<th>MESSAGE</th>';
   echo '<th>Delete</th>';
   echo '<th>Update</th>';
   echo '</tr>';
   
while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
echo '<tr>';
   
    echo '<td>'.$row['id'].'</td>';
    echo '<td>'.$row['username'].'</td>';
    echo '<td>'.$row['email'].'</td>';
    echo '<td>'.$row['mobile'].'</td>';
    echo '<td>'.$row['cityname'].'</td>';
    echo '<td>'.$row['area'].'</td>';
    echo '<td>'.$row['budget'].'</td>';
    echo '<td>'.$row['duration'].'</td>';
    echo '<td>'.$row['callingtime'].'</td>';
    echo '<td>'.$row['address1'].'</td>';
    echo '<td>'.$row['message1'].'</td>';
    echo '<td><a href="delete.php?id='.$id.'">Delete</a></td>';
    echo '<td><a href="update.php?id='.$id.'">Edit</a></td>';
    echo '</tr>';

   }
echo '<tr><th colspan="14"><a href="francie.php">Go Back</a></th></tr>';
echo '</table>';
}
else{
   echo "Record not found" ;
}


















?>