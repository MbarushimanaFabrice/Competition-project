<?php
include_once "../connection.php";
session_start();
$dbuser_name=$_SESSION['Username'];

if(isset($dbuser_name)){


$pro_id=$_GET['pro_id'];
// product
// $select=mysqli_query($conn,"SELECT * FROM `product` WHERE pro_id='$id'");
//     $row=mysqli_fetch_array($select);
// 	$pro_id= $row['pro_id'];
$select=mysqli_query($conn,"SELECT * FROM `supplier` WHERE sup_name LIKE '%$dbuser_name%'");
    $row2=mysqli_fetch_array($select);
	$sup_id= $row2['sup_id'];	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<style>
		
		@import url(../../css/Apply.css?v=1.1);
		.myform{
			margin: 122px 0px
		}
		h5{
			width: 575px;
			padding: 15px;
			background: #ffdd35fc;
			color: black;
			border-radius: 21px;
			position: absolute;
			top: 153px;
			text-align: center;
			left: 522px;

		}
		
	</style>
	<title>Apply for supply</title>
</head>
<body>
	<div class="navigation">
		<nav>
			<ul>
				<li class="active"><a href="../../../index.html">Home</a></li>
				<li><a href="../../About.html">About Us</a></li>
				<li><a href="../../booking.html">Our Rooms</a></li>
				<li><a href="../../contact.html">Contact Us</a></li>
				<li><a href="sup_home_page.php">Supplier</a></li>
				<li><a href="../admin_home_page.php">Admin</a></li>
			</ul>
		</nav>	
</div>
<div class="container">
	<div class="parents">

		<div class="option">	
		<a href="view_product_post.php"> <button>Products Post</button></a>
				<a href="accept_reject.php"> <button>Accepted And Rejected</button></a>
 	</div>
</div>
</div>
<center>
	<div class="myform">
		<p>Add Application form</p>
<form action="" method="post">
		<input type="hidden" value="<?php echo $pro_id ?>" name="pro_id">
		<input type="hidden" value="<?php echo $sup_id ?>" name="sup_id"><br>
		<input type="file" name="file"><br><br>
		<button type="submit" name="apply">Apply</button>
	</form>
 	</div>
</center> 
 </body>
</html>


<?php
if(isset($_POST['apply'])){
	$pro_id=$_POST['pro_id'];
	$sup_id=$_POST['sup_id'];
	$file=$_POST['file'];
	$insert=mysqli_query($conn,"INSERT INTO application(`file`,`sup_id`,`pro_id`)VALUES('$file','$sup_id','$pro_id')");
	// if($conn->query($insert)){
	// 	echo "data inserted";
	// }else{
	// 	echo "error:".$insert."<br>".$conn->error;
	//  }
	if($insert){
		echo "<h5>Your Application have been Sent view Acceptance and Rejected for more</h5>";

	}else{

		echo "samething wrong";
	}

}

?>




<?php
}else{
	header("location:../login.php");
}


?>