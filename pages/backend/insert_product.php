 
<?php
include_once("connection.php");
 if(isset($_POST['product'])){
	// get data from login form
	$name=$_POST['name'];
	$quality=$_POST['quality'];
	 

	// insert data in database
 
	$insert="INSERT INTO product(`pro_Name`,`Quality`) 
	values('$name','$quality')";
	if($conn->query($insert)){
		header("location:Admin/manage_product.php");
	}else{
		echo "error:".$insert."<br>".$conn->error;
	}
}


 
?>
 

?>