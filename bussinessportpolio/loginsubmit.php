<?php
include'connect.php';

if (isset($_POST['login'])) {
	$email = $_POST['email'];

	$pass  = $_POST['password'];

	// try{
		// $query = "select * form registration where email='$email' and password='$pass";

	// $sql=mysqli_query($con,"select * form registration where email='$email' and password='$pass") or die($sql->error);
	// }catch (mysqli_sql_exception $e) { 
 //      var_dump($e);
 //      exit; 
 //   } 

 mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    try{
        $sql=mysqli_query($con,"select * form registration where email='$email' and password='$pass");
    }catch (Exception $e){
        echo $e->getMessage();
        exit;
    }


	
	if (mysqli_num_rows($sql) === 1) {
		
		header('location:databaseregister.php');		
      }
      else
      	{
      		header('location:login.php');
      		echo "incorrect login email & password..";
      	}
}


?>
