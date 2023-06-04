 
<?php
include_once("connection.php");
 if(isset($_POST['Continue'])){
	// get data from login form
	$names=$_POST['names'];
	$Email=$_POST['Email'];
 	$username=$_POST['username'];
 	$password=$_POST['password'];

	// insert data in database
 
	$insert="INSERT INTO admin(`Names`,`Email`,`Username`,`Password`) 
	values('$names','$Email','$username','$password')";
	if($conn->query($insert)){
		header("location:login.php");
	}else{
		echo "error:".$insert."<br>".$conn->error;
	}
}
 
?>


?>