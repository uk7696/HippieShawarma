<?php
if (isset($_GET['id'])){
$id = $_GET['id'];
$con = new mysqli('localhost','root','','base');

if($con -> connect_error){
    die('Connection Error:'.$con-> connect_error);
    }

$query = "DELETE FROM emplist WHERE Id=$id";
$result = mysqli_query($con,$query);

if($result){
    header('location:table.php');
}
else{
    echo "Error while deleting record";
}

}
else{
    echo "Value not recieved";
}

?>