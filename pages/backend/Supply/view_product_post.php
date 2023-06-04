<?php
include_once "../connection.php";
session_start();
$dbuser_name=$_SESSION['Username'];
if($dbuser_name){


?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<style>
		@import url(../../css/admin_home_page.css?v=1.1);
	</style>
	<title>Apply for supply</title>
</head>
<body>
	<div class="navigation">
		<nav>
			<ul>
				<li class="active"><a href="../../index.html">Home</a></li>
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
		<table>
			<tr>
				<th>index</th>
				<th>Product Name</th>
				<th>Product Quality</th>
				<th>Apply for supply</th>
 
			</tr>    
			<?php
		$select=mysqli_query($conn,"SELECT * FROM `product`");
 		while($row=mysqli_fetch_array($select)){
			 $pro_id= $row['pro_id'];
			 $pro_name= $row['pro_Name'];
			 $Quality= $row['Quality'];
			 echo "
			 
			<tr>
				<td>$pro_id</td>
				<td>$pro_name</td>
				<td>$Quality</td>
				<td><a href='appy.php?pro_id=$pro_id'>Apply Naw</a></td>
			</tr>
			 
			 ";

		}
		?>
		</table>	
	</div>
	</div>
</div>
</body>
</html>

<?php
}else{
	header("location:../index.php");
}

?>