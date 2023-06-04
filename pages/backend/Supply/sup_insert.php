 
<?php
include_once("../connection.php");
 if(isset($_POST['Continue'])){
	// get data from login form
	$names=$_POST['names'];
	$nationalid=$_POST['nationalid'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	$username=$_POST['username'];
 	$password=$_POST['password'];

	// insert data in database
 
	$insert="INSERT INTO supplier(`sup_name`,`national_id`,`Address`,`Phone`,`Username`,`Password`) 
	values('$names','$nationalid','$address','$phone','$username','$password')";
	if($conn->query($insert)){
		header("location:../login.php");
	}else{
		echo "error:".$insert."<br>".$conn->error;
	}
}
 
?>
 

?>