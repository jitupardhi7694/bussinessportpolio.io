<?php
include 'connect.php';


$id=$_GET['id'];
$sql = "DELETE FROM `registration` WHERE `registration`.`id` = '$id'";
   $result = mysqli_query($con, $sql);

   if (mysqli_query($con, $sql)) {
    echo "Record deleted successfully";
    header('location:databaseregister.php');

} else {
    echo "Error deleting record: " . mysqli_error($con);
    
}
mysqli_close($con);
?>