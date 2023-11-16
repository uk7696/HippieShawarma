<?php

//step 1 db connection
$con = new mysqli('localhost','root','','base');

if($con -> connect_error){
    die('Connection Error:'.$con-> connect_error);
    }

if(isset($_POST['register']) && $_POST['register'] == "Insert"){
    $uname = $_POST['name'];
    $emailid = $_POST['email'];
    $mnumber = $_POST['mobile'];
    $cname = $_POST['cityname'];
    $areasize = $_POST['area'];
    $amount = $_POST['budget'];
    $period = $_POST['duration'];
    $freetime =$_POST['call'];
    $location = $_POST['address'];
    $msg = $_POST['message'];
   

//fetch data from table and display in web


  

$query = "INSERT INTO emplist(username,email,mobile,cityname,area,budget,duration,callingtime,address1,message1) 
          values( '$uname','$emailid','$mnumber','$cname','$areasize', '$amount','$period' ,'$freetime', '$location','$msg')";

$result = mysqli_query($con,$query);

if($result){
    echo "Successfully Inserted";
 }
 else{
     echo "Error while inserting record";
 }

}
else if(isset($_POST['updatevalue']) && $_POST['updatevalue'] == "Update"){
    $id = $_POST['id'];
    $uname = $_POST['name'];
    $emailid = $_POST['email'];
    $mnumber = $_POST['mobile'];
    $cname = $_POST['cityname'];
    $areasize = $_POST['area'];
    $amount = $_POST['budget'];
    $period = $_POST['duration'];
    $freetime =$_POST['call'];
    $location = $_POST['address'];
    $msg = $_POST['message'];



$query = "UPDATE emplist set username='$uname',email=' $emailid',mobile='$mnumber',cityname='$cname',area='$areasize',budget=' $amount',duration='$period ',callingtime=' $freetime',address1='$location',message1=' $msg' where id=$id";
$result = mysqli_query($con,$query);
if($result){
    header('location:table.php');
}else{
 echo 'Error While Updating recored';
}

}



?>